<?php

namespace App\Http\Controllers;

use App\model\Newsfeed;
use Illuminate\Http\Request;

class NewsfeedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newsfeed =  Newsfeed::orderby('id','desc')->get();
        return view('nfcrud\newsfeed',['newsfeed'=>$newsfeed,]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newsfeedStore = new Newsfeed;
        $newsfeedStore->bodyText = $request->get('bodyText');
        $newsfeedStore->save();
        return redirect()->to('npcrud\edit');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\model\newsfeed  $newsfeed
     * @return \Illuminate\Http\Response
     */
    public function show(newsfeed $newsfeed)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\model\newsfeed  $newsfeed
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $newsfeedEdit = Newsfeed::findorFail($id);
        return view('nfcrud\edit',['update'=>$newsfeedEdit,]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\model\newsfeed  $newsfeed
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $newsfeedUpdate = Newsfeed::findorFail($id);
        $newsfeedUpdate->bodyText = $request ->input('bodyText');
        $newsfeedUpdate->save();
        return redirect()->to('nfcrud\edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\model\newsfeed  $newsfeed
     * @return \Illuminate\Http\Response
     */
    public function destroy(newsfeed $newsfeed)
    {
        //
    }
}
