<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Product;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::orderBy('title', 'asc')->where('status', 1)->get();
        return view('backend.pages.product.manage', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $brands     = Brand::orderBy('name', 'asc')->where('status', 1)->get();
        $categories = Category::orderBy('name', 'asc')->where('status', 1)->get();
        $subCats    = SubCategory::orderBy('name', 'asc')->where('status', 1)->get();
        return view('backend.pages.product.create', compact('brands', 'categories', 'subCats'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = new Product;

        $this->validate($request, [
            'title'          => 'required',
            'short_details'  => 'required',
            'brand_id'       => 'required',
            'category_id'    => 'required',
            'subcat_id'      => 'required',
            'regular_price'  => 'required',
            'quantity'       => 'required',
        ]);

        $product->title          = $request->title;
        $product->slug           = Str::slug($request->title);
        $product->brand_id       = $request->brand_id;
        $product->category_id    = $request->category_id;
        $product->subcat_id      = $request->subcat_id;
        $product->short_details  = $request->short_details;
        $product->long_details   = $request->long_details;
        $product->regular_price  = $request->regular_price;
        $product->offer_price    = $request->offer_price;
        $product->quantity       = $request->quantity;
        $product->sku_code       = $request->sku_code;
        $product->video_link     = $request->video_link;
        $product->is_featured    = $request->is_featured;
        $product->status         = $request->status;
        $product->tags           = $request->tags;
        
        $product->save();

        $notification = array(
            'message'    => 'Product Added Successfully',
            'alert-type' => 'success',
        );

        return redirect()->route('product.manage')->with($notification);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::find($id);

        if( !is_null ($product) ){

            $brands     = Brand::orderBy('name', 'asc')->where('status', 1)->get();
            $categories = Category::orderBy('name', 'asc')->where('status', 1)->get();
            $subCats    = SubCategory::orderBy('name', 'asc')->where('status', 1)->get();
            return view('backend.pages.product.edit', compact('brands','categories','subCats','product'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::find($id);

        if( !is_null ($product) ){

        $product->title          = $request->title;
        $product->slug           = Str::slug($request->title);
        $product->brand_id       = $request->brand_id;
        $product->category_id    = $request->category_id;
        $product->subcat_id      = $request->subcat_id;
        $product->short_details  = $request->short_details;
        $product->long_details   = $request->long_details;
        $product->regular_price  = $request->regular_price;
        $product->offer_price    = $request->offer_price;
        $product->quantity       = $request->quantity;
        $product->sku_code       = $request->sku_code;
        $product->video_link     = $request->video_link;
        $product->is_featured    = $request->is_featured;
        $product->status         = $request->status;
        $product->tags           = $request->tags;
        
        $product->save();

        $notification = array(
            'message'    => 'Product Updated Successfully',
            'alert-type' => 'info',
        );

        return redirect()->route('product.manage')->with($notification);
        }
    }

    /**
     * Display the specified resource.
     */
    public function trashShow()
    {
        $products = Product::orderBy('title', 'asc')->where('status', 0)->get();
        return view('backend.pages.product.trash', compact('products'));
    }

    /**
     * Temporary Remove the specified resource from storage.
     */
    public function trash(string $id)
    {
        $product = Product::find($id);

        if( !is_null ($product) ){
            $product->status = 0;

            $product->save();

            return redirect()->route('product.manage');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);

        if( !is_null ($product) ){

            $product->delete();

            return redirect()->route('product.trashManage');
        }
    }
}
