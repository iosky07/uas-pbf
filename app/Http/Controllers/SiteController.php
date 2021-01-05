<?php

namespace App\Http\Controllers;

use App\Article;
use App\Models\Content;
use App\Models\Tag;
use App\Suggestion;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $suggestions = Suggestion::all();
        $user = Auth::id();
        return view('pages.site.kritik', compact('suggestions','user'));
    }
    public function passprofile(){
        $profile = User::all();
    }
}
