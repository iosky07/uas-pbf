<?php

namespace App\Http\Controllers;
<<<<<<< Updated upstream
use App\Article;
use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
=======

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function Sodium\compare;
>>>>>>> Stashed changes

class ArticleController extends Controller
{
    public $data;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
<<<<<<< Updated upstream
        $articles = Article::all();
        return view('pages.article.index', compact('articles'));
=======
        $article = Article::get();
//        dd($article);

        return view('pages.article.index', compact('article'));
>>>>>>> Stashed changes
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
<<<<<<< Updated upstream
        $this->data['title'] = $request->judul;
        $this->data['content'] = $request->contents;
        $this->data['thumbnail'] = date('dmyHis') . '.' . $request->file->extension();
        Storage::putFileAs('public/article-img', $request->file, $this->data['thumbnail']);
        $this->data['id_user'] = Auth::id();

//        dd($this->data);
        Article::create($this->data);

        return redirect(route('articles.index'));
=======
        $request->validate([
            'title'    =>  'required',
            'content'     =>  'required',
//            'image'         =>  'required|image|max:2048'
        ]);

//        $image = $request->file('image');
//
//        $new_name = rand() . '.' . $image->getClientOriginalExtension();
//        $image->move(public_path('images'), $new_name);

//        $form_data = array(
//            'title'     =>   $request->title,
//            'content'   =>   $request->content,
//            'user_id'   => Auth::id()
//        );
//        dd($form_data);

        Article::create([
                'title'     =>   $request->title,
                'content'   =>   $request->content,
                'id_user'   => Auth::id()
                //            'image'            =>   $new_name
        ]);

        $article = Article::get();
//        dd($article);

        return view('pages.article.index', compact('article'));
>>>>>>> Stashed changes
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::whereId($id)->get();

        return view('pages.article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::whereId($id)->get();

        return view('pages.article.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->data['title'] = $request->judul;
        $this->data['content'] = $request->contents;
        if ($request->file != NULL) {
            $this->data['thumbnail'] = date('dmyHis') . '.' . $request->file->extension();
            Storage::putFileAs('public/article-img', $request->file, $this->data['thumbnail']);
        }
        $this->data['id_user'] = Auth::id();

//        dd($this->data);
        Article::find($id)->update($this->data);

        return redirect(route('articles.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Article::find($id)->delete();
        return redirect(route('articles.index'));
    }
}
