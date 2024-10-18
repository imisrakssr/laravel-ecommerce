<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::orderBy('name', 'asc')->where('status', 1)->get();
        return view('backend.pages.category.manage', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $category = new Category;

        $category->name        = $request->name;
        $category->slug        = Str::slug($request->name);
        $category->description = $request->description;
        $category->status      = $request->status;

        $category->save();

        $notification = array(
            'message'    => 'Product Added Successfully',
            'alert-type' => 'success',
        );

        return redirect()->route('category.manage')->with($notification);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::find($id);

        if( !is_null ($category) ){
            
            return view('backend.pages.category.edit', compact('category'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category = Category::find($id);

        if( !is_null ($category) ){
            $category->name        = $request->name;
            $category->slug        = Str::slug($request->name);
            $category->description = $request->description;
            $category->status      = $request->status;

            $category->save();

            return redirect()->route('category.manage');
        }
    }

    /**
     * Display the specified resource.
     */
    public function trashShow()
    {
        $categories = Category::orderBy('name', 'asc')->where('status', 2)->get();
        return view('backend.pages.category.trash', compact('categories'));
    }

    /**
     * Temporary Remove the specified resource from storage.
     */
    
    public function trash(string $id)
    {
        $category = Category::find($id);

        if( !is_null ($category) ){
            $category->status = 2;

            $category->save();

            return redirect()->route('category.manage');
        }
    }

    /**
     * Permently Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::find($id);

        if( !is_null ($category) ){

            $subCats = SubCategory::orderBy('name', 'asc')->where('category_id', $category->id)->get();

            foreach( $subCats as $subCat ){
                $subCat->delete();
            }

            $category->delete();

            return redirect()->route('category.trashManage');
        }
    }
}
