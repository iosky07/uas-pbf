<?php

namespace App\Http\Controllers;

use App\Article;
use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public $data;

    public function index()
    {
        $comments = Comment::all();
        return view('pages.comment.index', compact('comments'));
    }

    public function updateComment(Request $request, $id) {
        $this->data['id_user'] = Auth::id();
        $this->data['id_article'] = (int)$id;
        $this->data['comment'] = $request->comments;

        Comment::create($this->data);

        return redirect(route('single-blog', $id));
    }

    public function destroyComment($id, $id_article) {
//        dd(Comment::whereId($id)->whereIdArticle($id_article)->get());
        Comment::whereId($id)->whereIdArticle($id_article)->delete();

        return redirect(route('single-blog', $id_article));
    }

    public function destroy($id) {
        Comment::find($id)->delete();

        return redirect(route('comments.index'));
    }
}
