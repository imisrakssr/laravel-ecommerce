<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Str;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subCats = SubCategory::orderBy('name', 'asc')->where('status', 1)->get();
        return view('backend.pages.subCategory.manage', compact('subCats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $parentCats = Category::orderBy('name', 'asc')->where('status', 1)->get();
        return view('backend.pages.subCategory.create', compact('parentCats'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $subCat = new SubCategory;

        $subCat->name        = $request->name;
        $subCat->slug        = Str::slug($request->name);
        $subCat->description = $request->description;
        $subCat->category_id = $request->category_id;
        $subCat->status      = $request->status;

        $subCat->save();

        $notification = array(
            'message'    => 'Product Added Successfully',
            'alert-type' => 'success',
        );

        return redirect()->route('subCategory.manage')->with($notification);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $subCat = SubCategory::find($id);

        if( !is_null ($subCat) ){
            
            $parentCats = Category::orderBy('name', 'asc')->where('status', 1)->get();
            return view('backend.pages.subCategory.edit', compact('parentCats','subCat'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $subCat = SubCategory::find($id);

        if( !is_null ($subCat) ){
        $subCat->name        = $request->name;
        $subCat->slug        = Str::slug($request->name);
        $subCat->description = $request->description;
        $subCat->category_id = $request->category_id;
        $subCat->status      = $request->status;

            $subCat->save();

            return redirect()->route('subCategory.manage');
        }
    }

    /**
     * Display the specified resource.
     */
    public function trashShow()
    {
        $subCats = SubCategory::orderBy('name', 'asc')->where('status', 2)->get();
        return view('backend.pages.subCategory.trash', compact('subCats'));
    }

    /**
     * Temporary Remove the specified resource from storage.
     */
    
    public function trash(string $id)
    {
        $subCat = SubCategory::find($id);

        if( !is_null ($subCat) ){
            $subCat->status = 2;

            $subCat->save();

            return redirect()->route('subCategory.manage');
        }
    }

    /**
     * Permently Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $subCat = SubCategory::find($id);

        if( !is_null ($subCat) ){

            $subCat->delete();

            return redirect()->route('subCategory.trashManage');
        }
    }
}
