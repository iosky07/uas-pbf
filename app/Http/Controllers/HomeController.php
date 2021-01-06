<?php

namespace App\Http\Controllers;

use App\Article;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->role==1){
            $articles = Article::all();
            return view('pages.article.index', compact('articles'));
        }
        $article = Article::all();
        return view('pages.site.blog', compact('article'));
    }

    public function profile(){
        $users = User::whereId(Auth::id())->get();
        return view('pages.profile.index', compact('users'));
    }
    public function edit($id){
        $users = User::whereId($id)->get();
        return view('pages.profile.index', compact('users'));
    }
    public function update(Request $request, $id ){
        $users = User::find($id);
        $users -> name = $request->input('name');
        $users -> password = $request->input('password');
        $users -> save();
//        dd($users);

        return redirect(route('profile'));
    }
    public function show($id){

    }
}
