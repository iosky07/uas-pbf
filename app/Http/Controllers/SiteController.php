<?php

namespace App\Http\Controllers;

use App\Article;
use App\Comment;
use App\Models\Content;
use App\Models\Tag;
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
    public function singleBlog($id)
    {
        $article = Article::whereId($id)->get();
        $comments = Comment::whereIdArticle($id)->get();
        $comment_count = count($comments);
        $user = Auth::id();

        return view('pages.site.single-blog', compact('article', 'comments', 'comment_count', 'user'));
    }
    public function pagekritik()
    {
        return view('pages.site.kritik');
    }
}
