<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use Illuminate\Support\Str;
use File;
use Image;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = Brand::orderBy('name', 'asc')->where('status', 1)->get();
        return view('backend.pages.brand.manage', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $brand = new Brand;
        $brand->name        = $request->name;
        $brand->slug        = Str::slug($request->name);
        $brand->description = $request->description;
        $brand->status      = $request->status;

        if ( $request->image ){
            //get the image from frontend
            $image = $request->file('image');

            //rename the image
            $img = time(). '-brand.' . $image->getClientOriginalExtension();

            //set a location
            $location = public_path("uploads/brands/" .$img);

            //create image to the folder
            Image::make($image)->save($location);

            //save the image name into database
            $brand->image = $img;
        }

        $brand->save();

        return redirect()->route('brand.manage');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $brand = Brand::find($id);

        if( !is_null ($brand) ){
            return view('backend.pages.brand.edit', compact('brand'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $brand = Brand::find($id);

        if( !is_null ($brand) ){
        $brand->name        = $request->name;
        $brand->slug        = Str::slug($request->name);
        $brand->description = $request->description;
        $brand->status      = $request->status;

         if ( $request->image ){

            //change the image and delete previous
            if( File::exists('uploads/brands/' . $brand->image) ){
                File::delete('uploads/brands/' . $brand->image);
            }


            //get the image from frontend
            $image = $request->file('image');

            //rename the image
            $img = time(). '-brand.' . $image->getClientOriginalExtension();

            //set a location
            $location = public_path("uploads/brands/" .$img);

            //create image to the folder
            Image::make($image)->save($location);

            //save the image name into database
            $brand->image = $img;
        }
            
            $brand->save();

            return redirect()->route('brand.manage');
        }
    }

    /**
     * Display the specified resource.
     */
    public function trashShow()
    {
        $brands = Brand::orderBy('name', 'asc')->where('status', 2)->get();
        return view('backend.pages.brand.trash', compact('brands'));
    }

    /**
     * Temporary Remove the specified resource from storage.
     */
    public function trash(string $id)
    {
        $brand = Brand::find($id);

        if( !is_null ($brand) ){
            $brand->status = 2;

            $brand->save();

            return redirect()->route('brand.manage');
        }
    }


    /**
     * Permently Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $brand = Brand::find($id);

        if( !is_null ($brand) ){

            $brand->delete();

            return redirect()->route('brand.trashManage');
        }
    }
}
