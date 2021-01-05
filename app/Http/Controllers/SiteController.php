<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function about()
    {
        return view('pages.site.about');
    }
    public function blog()
    {
        $article = Article::all();
        return view('pages.site.blog', compact('article'));
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
