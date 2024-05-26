<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;

class DonationFormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $donations = Donation::query()->paginate(10);
        return view('frontend.donation',compact('donations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('frontend.donation');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated=$request->validate([
            'name'=>'required|max:255',
            'reason'=>'required|max:255',
            'message'=>'required|max:255',
        ]);
        $slug = uniqid();
        $donations = new Donation (array(
            'name'=>$request->get('name'),
            'reason'=>$request->get('reason'),
            'message'=>$request->get('message'),
            'slug'=> $slug,
        ));
        $donations->save();
        return redirect()->route('donations.store')->with('status','successfully, its id is : ' .$slug);
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
