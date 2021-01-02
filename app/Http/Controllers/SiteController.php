<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Tag;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function about()
    {
        return view('pages.site.about');
    }
    public function blog()
    {
        return view('pages.site.blog');
    }
    public function singleblog()
    {
        return view('pages.site.singleblog');
    }
    public function pagekritik()
    {
        return view('pages.site.kritik');
    }
}
