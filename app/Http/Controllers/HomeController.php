<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Service;
use App\Models\Project;
use App\Models\Blog;

class HomeController extends Controller
{
    public function index()
    {
        return view('sections.home', [
            'about' => About::first(),
            'services' => Service::take(4)->get(),
            'projects' => Project::latest()->take(6)->get(),
            'blogs' => Blog::latest()->take(3)->get(),
        ]);
    }
}
