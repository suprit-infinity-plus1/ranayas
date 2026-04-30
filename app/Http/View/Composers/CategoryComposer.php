<?php

namespace App\Http\View\Composers;

use App\Model\TxnCategory;
use App\Model\TxnKeyword;
use Illuminate\View\View;

class CategoryComposer
{
    private $dynamicCategory;

    private $dynamiccategoryMobile;

    private $keywords;

    private $footerDynamicCategory;

    private $wishlists = 0;

    public function __construct()
    {
        $txnCategory = TxnCategory::where('status', true)->orderBy('parent_id')->get();
        $category = [
            'categories' => [],
            'parent_cats' => [],
        ];

        foreach ($txnCategory as $value) {
            $category['categories'][$value->id] = $value;
            $category['parent_cats'][$value->parent_id][] = $value->id;
        }

        $this->footerDynamicCategory = TxnCategory::select('name', 'slug_url')
            ->where('status', true)
            ->where('parent_id', 0)
            ->orderBy('name')
            ->get();

        $this->dynamicCategory = $this->buildCategory(0, $category, 0);
        $this->dynamiccategoryMobile = $this->buildCategoryMobile(0, $category, 0);
        $this->keywords = TxnKeyword::select('keyword')->distinct()->get();
    }

    public function compose(View $view)
    {
        $view->with([
            'dynamicCategory' => $this->dynamicCategory,
            'dynamiccategoryDesktop' => $this->dynamicCategory,
            'dynamiccategoryMobile' => $this->dynamiccategoryMobile,
            'keywords' => $this->keywords,
            'footerDynamicCategory' => $this->footerDynamicCategory,
            'wishlists' => $this->wishlists,
        ]);
    }

    public function buildCategory($parent, $category, $depth = 0)
    {
        if ($depth > 2 || ! isset($category['parent_cats'][$parent])) {
            return '';
        }

        $html = '';

        foreach ($category['parent_cats'][$parent] as $cat_id) {
            $cat = $category['categories'][$cat_id];
            $name = htmlspecialchars($cat->name, ENT_QUOTES, 'UTF-8');
            $url = route('cate', $cat->slug_url);
            $hasChildren = isset($category['parent_cats'][$cat_id]);
            $collapseId = 'collapse-' . $cat_id;

            if ($depth === 0) {
                if ($hasChildren) {
                    $html .= "<li class='menu-link parent'>";
                    $html .= "<a href='{$url}' class='link-title'><span class='sp-link-title'>{$name}</span><i class='fa fa-angle-down'></i></a>";
                    $html .= "<a href='#{$collapseId}' data-bs-toggle='collapse' class='link-title link-title-lg'><span class='sp-link-title'>{$name}</span><i class='fa fa-angle-down'></i></a>";
                    $html .= "<ul class='dropdown-submenu sub-menu collapse' id='{$collapseId}'>";
                    $html .= $this->buildCategory($cat_id, $category, $depth + 1);
                    $html .= '</ul>';
                    $html .= '</li>';
                } else {
                    $html .= "<li class='menu-link'><a href='{$url}' class='link-title'><span class='sp-link-title'>{$name}</span></a></li>";
                }
                continue;
            }

            if ($hasChildren) {
                $html .= "<li class='submenu-li'>";
                $html .= "<a href='{$url}' class='submenu-link'><span class='mm-text'>{$name}</span><i class='fa fa-angle-right'></i></a>";
                $html .= "<a href='#{$collapseId}' data-bs-toggle='collapse' class='submenu-link link-title link-title-lg'><i class='fa fa-angle-right'></i></a>";
                $html .= "<ul class='dropdown-product sub-menu collapse' id='{$collapseId}'>";
                $html .= $this->buildCategory($cat_id, $category, $depth + 1);
                $html .= '</ul>';
                $html .= '</li>';
            } else {
                $html .= "<li class='submenu-li'><a href='{$url}' class='submenu-link'><span class='mm-text'>{$name}</span></a></li>";
            }
        }

        return $html;
    }

    public function buildCategoryMobile($parent, $category, $depth = 0)
    {
        if ($depth > 2 || ! isset($category['parent_cats'][$parent])) {
            return '';
        }

        $html = '';

        foreach ($category['parent_cats'][$parent] as $cat_id) {
            $cat = $category['categories'][$cat_id];
            $name = htmlspecialchars($cat->name, ENT_QUOTES, 'UTF-8');
            $url = route('cate', $cat->slug_url);
            $hasChildren = isset($category['parent_cats'][$cat_id]);
            $collapseId = 'mobile-collapse-' . $cat_id;

            if ($depth === 0) {
                if ($hasChildren) {
                    $html .= "<li class='menu-link parent'>";
                    $html .= "<a href='{$url}' class='link-title'><span class='sp-link-title'>{$name}</span><i class='fa fa-angle-down'></i></a>";
                    $html .= "<a href='#{$collapseId}' data-bs-toggle='collapse' class='link-title link-title-lg'><span class='sp-link-title' onclick=\"window.location.href='{$url}'; event.preventDefault(); event.stopPropagation();\">{$name}</span><i class='fa fa-angle-down'></i></a>";
                    $html .= "<ul class='dropdown-submenu sub-menu collapse' id='{$collapseId}'>";
                    $html .= $this->buildCategoryMobile($cat_id, $category, $depth + 1);
                    $html .= '</ul>';
                    $html .= '</li>';
                } else {
                    $html .= "<li class='menu-link'><a href='{$url}' class='link-title'><span class='sp-link-title'>{$name}</span></a></li>";
                }
                continue;
            }

            if ($depth === 1) {
                if ($hasChildren) {
                    $html .= "<li class='submenu-li'>";
                    $html .= "<a href='{$url}' class='submenu-link has-child'><span class='mm-text'>{$name}</span><i class='fa fa-angle-right'></i></a>";
                    $html .= "<a href='#{$collapseId}' data-bs-toggle='collapse' class='submenu-link link-title link-title-lg'><span class='mm-text' onclick=\"window.location.href='{$url}'; event.preventDefault(); event.stopPropagation();\">{$name}</span><i class='fa fa-angle-right'></i></a>";
                    $html .= "<ul class='dropdown-product sub-menu collapse' id='{$collapseId}'>";
                    $html .= $this->buildCategoryMobile($cat_id, $category, $depth + 1);
                    $html .= '</ul>';
                    $html .= '</li>';
                } else {
                    $html .= "<li class='submenu-li'><a href='{$url}' class='submenu-link'><span class='mm-text'>{$name}</span></a></li>";
                }
                continue;
            }

            if ($depth === 2) {
                $html .= "<li class='product-li'>";
                $html .= "<a href='{$url}' class='product-link'>{$name}</a>";
                $html .= "</li>";
            }
        }

        return $html;
    }
}
