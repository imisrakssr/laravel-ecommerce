<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;
use Illuminate\Support\Str;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $countries = Country::orderBy('name', 'asc')->where('status', 1)->get();
        return view('backend.pages.country.manage', compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.country.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $country = new Country;
        $country->name   = $request->name;
        $country->slug   = Str::slug($request->name);
        $country->status = $request->status;
        
        $country->save();

        return redirect()->route('country.manage');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $country = Country::find($id);

        if( !is_null ($country) ){
            return view('backend.pages.country.edit', compact('country'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $country = Country::find($id);

        if( !is_null ($country) ){
            $country->name   = $request->name;
            $country->slug   = Str::slug($request->name);
            $country->status = $request->status;
            
            $country->save();

            return redirect()->route('country.manage');
        }
    }

    /**
     * Display the specified resource.
     */
    public function trashShow()
    {
        $countries = Country::orderBy('name', 'asc')->where('status', 2)->get();
        return view('backend.pages.country.trash', compact('countries'));
    }

    /**
     * Temporary Remove the specified resource from storage.
     */
    public function trash(string $id)
    {
        $country = Country::find($id);

        if( !is_null ($country) ){
            $country->status = 2;

            $country->save();

            return redirect()->route('country.manage');
        }
    }

    /**
     * Permently Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $country = Country::find($id);

        if( !is_null ($country) ){

            $country->delete();

            return redirect()->route('country.trashManage');
        }
    }
}
