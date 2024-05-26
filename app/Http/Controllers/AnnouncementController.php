<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Faker\Provider\Image;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $announcements = Announcement::latest()->paginate(10)->sortByDesc('created_at');
        return view('announcements.create', compact('announcements'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('announcements.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title => required|max:255',
            'image => sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description => required|max:255',
        ]);
        $announcements = new Announcement(array(
            'title' => $request->get('title'),
            'image' => $request->get('image'),
            'description' => $request->get('description'),
        ));
        if ($request->hasfile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = storage_path('app/public/images/') . $filename;

            $announcements->image = $filename;
            $announcements->save();
        }

        return redirect()->route('announcement.store')->with('success','successfully posted');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $announcemets = Announcement::where(id)->FindOrfail();
        return view('announcements.show',compact('announcements'));

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
