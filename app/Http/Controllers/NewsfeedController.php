<?php

namespace App\Http\Controllers;

use App\Model\Newsfeed;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\Resource;

class NewsfeedController extends Controller
{
    public function index()
    {
        $newsfeed =  Newsfeed::orderby('id','desc')->get();
        return view('nfcrud\newsfeed',['newsfeed'=>$newsfeed,]);
    }
    public function create()
    {

    }
    public function store(Request $request)
    {
        $newsfeedStore = new Newsfeed;
        $newsfeedStore->bodyText = $request->get('bodyText');
        $newsfeedStore->save();
        return redirect()->to('npcrud\edit');
    }
    public function show($newsfeedId)
    {
        return Newsfeed::findOrFail($newsfeedId);
    }
    public function edit($id)
    {
        $newsfeedEdit = Newsfeed::findorFail($id);
        return view('nfcrud\edit',['update'=>$newsfeedEdit,]);
    }
    public function update(Request $request, $id)
    {
        $newsfeedUpdate = Newsfeed::findorFail($id);
        $newsfeedUpdate->bodyText = $request ->input('bodyText');
        $newsfeedUpdate->save();
        return back();
    }
    public function destroy(newsfeed $newsfeed)
    {
    }
    
}
