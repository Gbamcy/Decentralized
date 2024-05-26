<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contact_forms = ContactForm::query()->paginate(10);
        return view('contacts.create',compact('contact_forms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name => required|max:255',
            'phone => required|max:255',
            'subject => required|max:255',
            'message => required|max:255'
        ]);
        $slug = uniqid();
        $contact_forms = new ContactForm (array(
            'name' => $request->get('name'),
            'phone' => $request->get('phone'),
            'subject' => $request->get('subject'),
            'message' => $request->get('message'),
            'slug' => $slug
        ));
        $contact_forms->save();
        return redirect()->route('contacts.store')->with('status','successfully submitted');

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
