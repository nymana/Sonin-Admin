<?php

namespace App\Http\Controllers;

use App\Model\Newsfeed;
use Illuminate\Http\Request;

class NewsfeedImgController extends Controller
{

    public function upload(Request $request)
    {
        request()->validate([
            'newsfeed_id' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $path = $request->file('image')->storePublicly('image',['disk' => 'public']);
        $newsfeed = Newsfeed::findOrFail($request->get('newsfeed_id'));
        $newsfeed->update(['image' => $path]);
        return redirect()->back()->withSuccess('Great! Image has been successfully uploaded.');
    }
}
