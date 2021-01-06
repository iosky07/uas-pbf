<?php

namespace App\Http\Controllers;

use App\Article;
use App\Comment;
use App\Models\Content;
use App\Models\Tag;
use App\Suggestion;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiteController extends Controller
{
    public $array;

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
        $user = Comment::whereIdUser(Auth::id())->pluck('id_user');

        foreach ($user as $u) {
            $this->array = $u;
        }

        return view('pages.site.single-blog', compact('article', 'comments', 'comment_count'));
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
