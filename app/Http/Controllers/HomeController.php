<?php

namespace App\Http\Controllers;

use App\Article;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        $users->name = $request->name;
        if ($request->password != NULL) {
            if ($request->password == $request->confirm_password) {
                $users->password = Hash::make($request->password);
//                dd($users->password);
                $users->save();
                if ($request->name != NULL) {
                    return redirect()->route('profile')->with('success', 'Nama dan Kata sandi berhasil diubah');
                }
                return redirect()->route('profile')->with('success', 'Kata sandi berhasil diubah');
            }else{
                return redirect()->route('profile')->with('alert', 'Konfirmasi kata sandi tidak sesuai');
            }
        }
        if ($request->name != NULL) {
            $users->save();
            return redirect()->route('profile')->with('success', 'Nama berhasil diubah');
        }

//        dd($users);

        return redirect(route('profile'));
    }
    public function show($id){

    }

    public function destroy($id){
        User::find($id)->delete();

        return redirect(route('comments.index'));
    }
}
