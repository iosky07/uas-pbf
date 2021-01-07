<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Auth\Authenticatable;
use Illuminate\Http\Request;
use App\Suggestion;
use Illuminate\Support\Facades\Auth;

class SuggestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suggestions = Suggestion::all();
        return view('pages.critic.index', compact('suggestions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.site.kritik');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeSuggestion(Request $request)
    {

        Suggestion::create([
        'critic' => $request->critic,
        'suggestion' => $request->suggestion,
        'id_user' => Auth::id()
        ]);
        $user = Auth::user();
        return redirect()->route('pagekritik',compact('user'))->with('success', 'Kritik dan saran berhasil terkirim!');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $suggestions = Suggestion::find($id);
        $suggestions ->delete();

        return redirect(route('suggestions.index'));
    }
}
