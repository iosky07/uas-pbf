<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $users = User::all();
        return view('pages.profile.manage-user', compact('users'));
    }

    public function store(Request $request, $id) {
        $users = User::find($id);
        $users -> name = $request->input('thumbnail');

        $users -> save();
    }

    public function destroy($id) {
        User::find($id)->delete();
        return redirect(route('manage-users.index'));
    }
}
