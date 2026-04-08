<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Model\TxnCategory;
use App\Model\TxnKeyword;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('layouts.master', function ($view) {
            $categories = TxnCategory::where('status', true)->get();
            $parentCategories = $categories->where('parent_id', 0);
            
            $dynamicCategory = "";
            foreach ($parentCategories as $cat) {
                // Generate simple frontend list items for the top navigation
                $url = route('cate', $cat->slug_url);
                $name = htmlspecialchars($cat->name);
                $dynamicCategory .= "<li class=\"menu-link\">
                    <a href=\"{$url}\" class=\"link-title\">
                        <span class=\"sp-link-title\">{$name}</span>
                    </a>
                </li>";
            }

            $keywords = TxnKeyword::select('keyword')->distinct()->get();

            $view->with('dynamicCategory', $dynamicCategory);
            $view->with('footerDynamicCategory', $parentCategories);
            $view->with('keywords', $keywords);
        });
    }
}
