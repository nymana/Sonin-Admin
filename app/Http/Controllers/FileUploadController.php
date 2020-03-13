<?php

namespace App\Http\Controllers;

use App\Model\Newspaper;
use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function FileUploadPost(Request $request)

    {
//        Comment::where('newspaperCommentId', $newspaperId)->get();


        request()->validate([
            'newspaper_id' => 'required',
            'file' => 'required|file|mimes:zip,rar|max:50000',
        ]);

        $path = $request->file('file')->storePublicly('file',['disk' => 'public']);

        $newspaper = Newspaper::findOrFail($request->get('newspaper_id'));

        $newspaper->update(['file' => $path]);

        return redirect()->to("newspaper")
            ->withSuccess('Great! Image has been successfully uploaded.');
    }
}
