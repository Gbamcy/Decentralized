<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function about()
    {
        return view('frontend.about');
    }
    public function contact()
    {
        return view('frontend.contact');
    }
    public function gallery()
    {
        return view('frontend.gallery');
    }
    public function pastor()
    {
        return view('frontend.pastor');
    }
    public function template()
    {
        return view('frontend.template');
    }
    public function index()
    {
        return view('frontend.gallery-detail');
    }
    public function activities()
    {
        return view('frontend.activities');
    }
    public function donation()
    {
        return view('frontend.donation');
    }
    public function announcement()
    {
        return view('frontend.announcement');
    }
    public function privacyPolicy()
    {
        return view('frontend.privacyPolicy');
    }
    public function audio()
    {
        return view('frontend.audio');
    }
    public function post()
    {
        return view('posts.create');
    }


}
