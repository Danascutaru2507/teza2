<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Event;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function dashboard()
    {
        $events = Event::count();
        $blogs = Blog::count();

        return view('admin.dashboard', compact('events', 'blogs'));
    }
}
