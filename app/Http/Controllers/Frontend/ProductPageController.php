<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Product;
use Illuminate\Support\Str;

class ProductPageController extends Controller
{
    /**
     * Display a listing of the products.
     */
    public function allProducts()
    {
        $products = Product::orderBy('id','desc')->where('status', 1)->get();
        return view('frontend.pages.product.all-products', compact('products'));
    }

    /**
     * Display a listing of the products description.
     */
    public function productDetails($slug)
    {
        $productDetails = Product::where( 'slug', $slug )->first();

        if(!is_null($productDetails)){
            return view('frontend.pages.product.product-details', compact('productDetails'));
        }
    }

        public function offerProducts()
    {
        return view('frontend.pages.product.offer-products');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
