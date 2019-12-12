<?php

namespace App\Http\Controllers;

use App\model\Newspaper;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\Resource;

class NewspaperController extends Controller
{

    public function index()
    {
        $newspaper =  Newspaper::orderby('id','desc')->get();
        return view('npcrud.newspaper',['newspapers'=>$newspaper,]);
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
        $newsStore = new Newspaper;
        $newsStore->title = $request->get('title');
        $newsStore->save();
        return redirect()->to('npcrud.edit');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\model\newspaper  $newspaper
     * @return \Illuminate\Http\Response
     */
    public function show($newspaperId)
    {
        return Newspaper::findOrFail($newspaperId);
    }
    public function list()
    {
        return Resource::collection(Newspaper::all());
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\model\newspaper  $newspaper
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $newsEdit = Newspaper::findorFail($id);
        return view('npcrud.edit',['update'=>$newsEdit,]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\model\newspaper  $newspaper
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $newspaperUpdate = Newspaper::findorFail($id);
        $newspaperUpdate->title = $request ->get('title');
        $newspaperUpdate->description = $request ->get('description');
        $newspaperUpdate->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\model\newspaper  $newspaper
     * @return \Illuminate\Http\Response
     */
    public function destroy(newspaper $newspaper)
    {
        //
    }
}
