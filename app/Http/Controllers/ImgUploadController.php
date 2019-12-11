<?php

namespace App\Http\Controllers;

use App\model\Comment;
use App\model\Newspaper;
use Illuminate\Http\Request;

class ImgUploadController extends Controller
{
    public function imageUpload()

    {
        return view('imageUpload');
    }



    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function imageUploadPost(Request $request)

    {
//        Comment::where('newspaperCommentId', $newspaperId)->get();


        request()->validate([
            'newspaper_id' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $path = $request->file('image')->storePublicly('image',['disk' => 'public']);

        $newspaper = Newspaper::findOrFail($request->get('newspaper_id'));

        $newspaper->update(['image' => $path]);

        return redirect()->to("newspaper")
            ->withSuccess('Great! Image has been successfully uploaded.');
    }
}
