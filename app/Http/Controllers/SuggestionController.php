<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Auth\Authenticatable;
use Illuminate\Http\Request;
use App\Suggestion;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class SuggestionController extends Controller
{
    public $data;
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
      $this->data['critic'] = $request->critic;
      $this->data['suggestion'] = $request->suggestion;
      $this->data['id_user'] = Auth::id();
      $this->data['created_at'] = Carbon::now('WIB')->format('d M Y H:i:s');
      // dd($this->data);
      Suggestion::create($this->data);
        // Suggestion::create([
        // 'critic' => $request->critic,
        // 'suggestion' => $request->suggestion,
        // 'id_user' => Auth::id(),
        // 'created_at'=> Carbon::now('WIB')->format('Y-m-d H:i:s'),
        // ]);
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
