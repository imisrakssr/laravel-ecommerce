<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\State;
use App\Models\District;
use Illuminate\Support\Str;

class DistrictController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $districts = District::orderBy('name', 'asc')->where('status', 1)->get();
        return view('backend.pages.district.manage', compact('districts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $states = State::orderBy('name', 'asc')->where('status', 1)->get();
        return view('backend.pages.district.create', compact('states'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $district = new District;
        $district->name     = $request->name;
        $district->state_id = $request->state_id;
        $district->status   = $request->status;

        $district->save();

        return redirect()->route('district.manage');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $district = District::find($id);

        if( !is_null ($district) ){
            $states = State::orderBy('name', 'asc')->where('status', 1)->get();
            return view('backend.pages.district.edit', compact('states','district'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $district = District::find($id);

        if( !is_null ($district) ){
            $district->name     = $request->name;
            $district->state_id = $request->state_id;
            $district->status   = $request->status;
            
            $district->save();

            return redirect()->route('district.manage');
        }
    }

    /**
     * Display the specified resource.
     */
    public function trashShow()
    {
        $districts = District::orderBy('name', 'asc')->where('status', 2)->get();
        return view('backend.pages.district.trash', compact('districts'));
    }

    /**
     * Temporary Remove the specified resource from storage.
     */
    public function trash(string $id)
    {
        $district = District::find($id);

        if( !is_null ($district) ){
            $district->status = 2;

            $district->save();

            return redirect()->route('district.manage');
        }
    }

    /**
     * Permently Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $district = District::find($id);

        if( !is_null ($district) ){

            $district->delete();

            return redirect()->route('district.trashManage');
        }
    }
}
