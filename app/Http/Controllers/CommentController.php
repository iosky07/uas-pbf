<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::all();
        return view('pages.comment.index', compact('comments'));
    }

    public function destroy($id) {
        Comment::find($id)->delete();
        return redirect(route('comments.index'));
    }
}
