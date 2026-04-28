<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\TxnCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = TxnCategory::paginate(50);
        return view('backend.admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $txnCategory = TxnCategory::orderBy('parent_id')->get();

        $category = array(
            'categories' => array(),
            'parent_cats' => array(),
        );

        foreach ($txnCategory as $key => $value) {
            # code...
            $category['categories'][$value->id] = $value;
            //creates entry into parent_cats array. parent_cats array contains a list of all categories with children
            $category['parent_cats'][$value->parent_id][] = $value->id;
        }

        $dynamicCategory = $this->buildCategory(0, $category);
        // dd($dynamicCategory);
        return view('backend.admin.categories.create', compact('dynamicCategory'));
    }

    public function buildCategory($parent, $category)
    {
        $html = "";
        if (isset($category['parent_cats'][$parent])) {
            $html .= "<b class='collapsible'></b>";
            $html .= "<ul class='category_div content'>";
            foreach ($category['parent_cats'][$parent] as $cat_id) {
                if (!isset($category['parent_cats'][$cat_id])) {
                    $html .= "<li><strong data-parent-id='" . $category['categories'][$cat_id]['id'] . "' data-parent-name='" . $category['categories'][$cat_id]['name'] . "' class='addCategory badge badge-primary'>Add New</strong> in " . $category['categories'][$cat_id]['name'] . "</li>";

                }
                if (isset($category['parent_cats'][$cat_id])) {
                    $html .= "<li> <strong data-parent-id='" . $category['categories'][$cat_id]['id'] . "' data-parent-name='" . $category['categories'][$cat_id]['name'] . "' class='addCategory badge badge-primary'>Add New</strong> in " . $category['categories'][$cat_id]['name'];
                    $html .= $this->buildCategory($cat_id, $category);
                    $html .= "</li>";

                }
            }
            $html .= "</ul> \n";
        }
        return $html;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category_name' => 'required|string|unique:txn_categories,name',
            'image_path' => 'required|image|mimes:png,jpg,jpeg|min:10|max:1024',
            'status' => 'required|boolean',
            'categorystatus' => 'required|boolean',
        ], [
            'category_name.required' => 'Please Enter Category Name',
            'category_name.unique' => $request->category_name . ' Category Already Available',
            'image_path.required' => 'Please Upload Category Image',
            'status.required' => 'Please select status',
            'categorystatus.required' => 'Please select home status',
            'image_path.image' => 'Please upload a valid image file',
            'image_path.mimes' => 'Only PNG, JPG, JPEG images are allowed',
            'image_path.max' => 'Image size must not exceed 1 MB',
            'image_path.min' => 'Image size is too small (minimum ~10KB recommended)',
        ]);
        if ($validator->fails()) {
            connectify('error', 'Add Category', $validator->errors()->first());
            return redirect(route('admin.categories.create'))
                ->withInput()
                ->with('messageDanger', $validator->errors()->first());
        }

        try {
            $parent_id = $request->txtCategoryID ?? 0;
            $cate = TxnCategory::find($parent_id);
            
            if ($cate) {
                $slug_url = Str::slug($cate->name . '-' . $request->category_name . $cate->id, '-');
            } else {
                $slug_url = Str::slug($request->category_name . '-' . rand(10, 99), '-');
            }

            $img = null;
            if ($request->hasFile('image_path')) {
                $img = "category_" . Str::slug(Str::limit($request->category_name, 20), '-') . '-' . rand(1000, 9999) . '.' . $request->image_path->extension();
                $request->image_path->storeAs('images/categories', $img, 'public');
            }

            TxnCategory::create([
                'parent_id' => $parent_id,
                'name' => $request->category_name,
                'status' => $request->status,
                'categorystatus' => $request->categorystatus,
                'slug_url' => $slug_url,
                'image_url' => $img,
            ]);

            connectify('success', 'Added Category', 'Category has been added successfully');
            return redirect(route('admin.categories.create'));

        } catch (\Exception $ex) {
            Log::error(['Add Category' => $ex->getMessage()]);
            connectify('error', 'Add Category', 'Whoops, Something Went Wrong!');
            return redirect(route('admin.categories.create'))->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {

            $category = TxnCategory::where('id', $id)->firstOrFail();
            $allCategories = TxnCategory::where('status', true)->get();
            return view('backend.admin.categories.edit', compact('category', 'allCategories'));

        } catch (\Exception $ex) {

            if ($ex instanceof \Illuminate\Database\Eloquent\ModelNotFoundException) {

                connectify('error', 'Updated Category', 'Whoops, Category Not Found !');

                return redirect(route('admin.categories.all'));
            }

            Log::error(['Edit Category' => $ex->getMessage()]);

            connectify('error', 'Updated Category', 'Whoops, Something Went Wrong from our end !');

            return redirect(route('admin.categories.all'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Category  $Category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:191',
            'parent_id' => 'required|numeric',
            'status' => 'required|boolean',
            'categorystatus' => 'required|boolean',
            'image_path' => 'nullable|image|mimes:png,jpg,jpeg|min:10|max:1024',
        ],
            [
                'name.required' => 'Please Enter Category Name',
                'parent_id.required' => 'Please Enter Parent Category',
                'status.required' => 'Please Select Status',
                'categorystatus.required' => 'Please Select Home Status',
                'image_path.image' => 'Please upload a valid image file',
                'image_path.mimes' => 'Only PNG, JPG, JPEG images are allowed',
                'image_path.max' => 'Image size must not exceed 1 MB',
                'image_path.min' => 'Image size is too small (minimum ~10KB recommended)',
            ]);

        if ($validator->fails()) {
            connectify('error', 'Update Category', $validator->errors()->first());
            return redirect(route('admin.categories.edit', $id))->withInput();
        }

        try {

            $category = TxnCategory::where('id', $id)->firstOrFail();

            if ($category) {
                $request['slug_url'] = Str::slug($category->name . '-' . $request->name . $category->id, '-');
            } else {
                $request['slug_url'] = Str::slug($request->name . $category->id, '-');
            }

            // $img = $category->image_url;

            // if ($request->hasFile('image_path')) {
            //     $img = "category_" . Str::slug(Str::limit($request->name, 20), '-') . '-' . rand(0000, 9999) . '.' . pathinfo($request->image_path->getClientOriginalName(), PATHINFO_EXTENSION);

            //     $old_image = public_path('/storage/images/categories/' . $category->image_url);

            //     if (File::exists($old_image)) {
            //         File::delete($old_image);
            //     }

            //     // $request->image_path->storeAs('public/images/categories', $img);
            //     $request->image_path->storeAs('images/categories', $img, 'public');
            // }
            $img = $category->image_url;

            if ($request->hasFile('image_path')) {

                $img = "category_" . Str::slug(Str::limit($request->name, 20), '-') . '-' . rand(1000, 9999) . '.' . $request->image_path->extension();

                // delete old image
                if ($category->image_url && Storage::disk('public')->exists('images/categories/' . $category->image_url)) {
                    Storage::disk('public')->delete('images/categories/' . $category->image_url);
                }

                // store new image
                $request->image_path->storeAs('images/categories', $img, 'public');
            }

            $category->update([
                'name' => $request->name,
                'parent_id' => $request->parent_id,
                'status' => $request->status,
                'categorystatus' => $request->categorystatus,
                'slug_url' => $request->slug_url,
                'image_url' => $img,
            ]);

            connectify('success', 'Updated Category', 'Category has been Updated successfully');

            return redirect(route('admin.categories.all'));

        } catch (\Exception $ex) {

            if ($ex instanceof \Illuminate\Database\Eloquent\ModelNotFoundException) {

                connectify('error', 'Updated Category', 'Whoops, Category Not Found !');

                return redirect(route('admin.categories.all'));
            }

            Log::error(['Update Category' => $ex->getMessage()]);

            connectify('error', 'Updated Category', 'Whoops, Something Went Wrong from our end !');

            return redirect(route('admin.categories.all'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Category  $Category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {

            $category = TxnCategory::where('id', $id)->firstOrFail();

            // Delete image from storage
            if ($category->image_url && Storage::disk('public')->exists('images/categories/' . $category->image_url)) {
                Storage::disk('public')->delete('images/categories/' . $category->image_url);
            }

            $category->delete();

            return redirect(route('admin.categories.all'))->with('messageSuccess', 'Category has been deleted Successfully !');

        } catch (\Exception $ex) {

            if ($ex instanceof \Illuminate\Database\Eloquent\ModelNotFoundException) {
                return redirect(route('admin.categories.all'))->with('messageDanger', 'Whoops, Category Not Found with id : ' . $id);
            }
            Log::error(['Delete Category' => $ex->getMessage()]);
            return redirect(route('admin.categories.all'))->with('messageDanger', 'Error, Something went wrong!');
        }
    }

    public function addCategory(Request $request)
    {

    }

    public function getCategory(Request $request)
    {
        $categories = TxnCategory::where('parent_id', $request->category_id)->get();
        if (count($categories)) {
            return response()->json(['success' => $categories], 200);
        }
        return response()->json(['error' => $categories], 200);
    }
}
