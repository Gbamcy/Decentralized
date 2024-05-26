<?php

namespace App\Http\Controllers;

use App\Models\Pastor_form;
use Illuminate\Http\Request;

class PastorFormRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pastors_forms = Pastor_form::query()->paginate(10);
        return view('pastors.create',compact('pastors_forms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pastors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name => required|max:255',
            'phone => required|max:255',
            'message => required|max:255'
        ]);
        $slug = uniqid();
        $pastor_forms = new Pastor_form (array(
            'name' => $request->get('name'),
            'phone' => $request->get('phone'),
            'message' => $request->get('message'),
            'slug' => $slug
        ));
        $pastor_forms->save();
        return redirect()->route('pastors.store')->with('status','request submitted successfully, its id is : ' .$slug);
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
