<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SignUpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::query()->paginate(10);
        return view('backend.admin.users',compact('users'));
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
    public function edit( $id)
    {

        $users = User:: findOrfail($id);
        return view('backend.admin.user.edit',compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $users = User::findOrfail($id);
        $users ->name = $request ->get('name');
        $users ->phone = $request ->get('phone');
        return redirect()->route('backend.admin.users.update')->with('status','updated successfully.!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $users = User::findOrFail($id);
        $users->delete();
        return redirect()->route('admin.users.destroy')->with('status','user deleted successfully');
    }
}
