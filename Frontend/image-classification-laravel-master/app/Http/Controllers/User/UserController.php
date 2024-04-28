<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Event;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home()
    {
        return view('frontend.home');
    }

    public function blog()
    {
        $events = Event::all();
        $latestBlog = Blog::latest()->first();

        return view('frontend.blog', compact('latestBlog', 'events'));
    }

    public function map()
    {
        return view('frontend.map');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function uploadFile()
    {
        return view('frontend.upload-file');
    }

    public function showResult()
    {
        return view('frontend.result');
    }
}
