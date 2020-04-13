<?php

namespace App\Http\Controllers;

use App\Model\Comment;
use App\Model\Newspaper;
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
        request()->validate([
            'newspaper_id' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        

        $path = $request->file('image')->storePublicly('image',['disk' => 'public']);
        $newspaper = Newspaper::findOrFail($request->get('newspaper_id'));

        $host = $request->getHttpHost();
        $url = "$host"."/"."$path";

        $newspaper->update(['image' => $url]);
        return redirect()->back()->withSuccess('Great! Image has been successfully uploaded.');
    }
}
