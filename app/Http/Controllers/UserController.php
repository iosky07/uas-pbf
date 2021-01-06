<?php

namespace App\Http\Controllers;

use App\Article;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{

    public $data;

    public function index() {
//        dd('asdasd');
        $users = User::all();
        return view('pages.profile.manage-user', compact('users'));
    }

    public function storeThumbnail(Request $request, $id) {

//        dd($request->file);
        $this->data['thumbnail'] = date('dmyHis') . '.' . $request->file->extension();
        Storage::putFileAs('public/article-img', $request->file, $this->data['thumbnail']);

//        dd($id);
//        dd($this->data['thumbnail']);
        User::whereId($id)->update(array('thumbnail' => $this->data['thumbnail']));
        return redirect(route('profile'));
    }

    public function destroy($id) {
        User::find($id)->delete();
        return redirect(route('manage-users.index'));
    }
}
