<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\State;
use Illuminate\Support\Str;

class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $states = State::orderBy('name', 'asc')->where('status', 1)->get();
        return view('backend.pages.state.manage', compact('states'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $countries = Country::orderBy('name', 'asc')->where('status', 1)->get();
        return view('backend.pages.state.create', compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $state = new State;
        $state->name            = $request->name;
        $state->priority_number = $request->priority_number;
        $state->country_id      = $request->country_id;
        $state->status          = $request->status;
        
        $state->save();

        return redirect()->route('state.manage');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $state = State::find($id);

        if( !is_null ($state) ){

            $countries = Country::orderBy('name', 'asc')->where('status', 1)->get();
            return view('backend.pages.state.edit', compact('countries', 'state'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $state = State::find($id);

        if( !is_null ($state) ){
            $state->name            = $request->name;
            $state->priority_number = $request->priority_number;
            $state->country_id      = $request->country_id;
            $state->status          = $request->status;
            
            $state->save();

            return redirect()->route('state.manage');
        }
    }

    /**
     * Display the specified resource.
     */
    public function trashShow()
    {
        $states = State::orderBy('name', 'asc')->where('status', 2)->get();
        return view('backend.pages.state.trash', compact('states'));
    }

    /**
     * Temporary Remove the specified resource from storage.
     */
    public function trash(string $id)
    {
        $state = State::find($id);

        if( !is_null ($state) ){
            $state->status = 2;

            $state->save();

            return redirect()->route('state.manage');
        }
    }

    /**
     * Permently Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $state = State::find($id);

        if( !is_null ($state) ){

            $state->delete();

            return redirect()->route('state.trashManage');
        }
    }
}
