<?php

namespace App\Http\Controllers;

use App\Model\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comment =  Comment::orderby('id','desc')->get();
        return view('comcrud.comment',['comment'=>$comment ,]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show($commentId)
    {
        return Comment::findOrFail($commentId);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $commentEdit = Comment::findorFail($id);
        return view('comcrud.edit',['update'=>$commentEdit,]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, comment $comment)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(comment $comment)
    {
        $comment->delete();
        return back();
    }
}
