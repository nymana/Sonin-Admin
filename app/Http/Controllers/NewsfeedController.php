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
        return view('nfcrud.newsfeed',['newsfeed'=>$newsfeed,]);
    }

    public function create()
    {
        return view('nfcrud.create');
    }

    public function store(Request $request)
    {
        $host = request()->getSchemeAndHttpHost();
        request()->file('image')->storeAs('/public/images/newsfeed', request()->file('image')->getClientOriginalName());

        $image = 'storage/images/newsfeed/'.request()->file('image')->getClientOriginalName();

        $newsfeedStore = new Newsfeed;
        $newsfeedStore->title = $request->get('title');
        $newsfeedStore->description = $request->get('description');
        $newsfeedStore->image = $host."/".$image;
        $newsfeedStore->save();
        return redirect('/newsfeed');
    }

    public function show($newsfeedId)
    {
        $newsfeed = Newsfeed::find($newsfeedId);
                    
        return new Resource([
            'id' => $newsfeed->id,
            'title' => $newsfeed->title,
            'description' =>$newsfeed->description,
            'image' => $newsfeed->image,
            'comment_counts' => $newsfeed->comment_counts,
            'love_counts' => $newsfeed->love_counts,
            'view_counts' => $newsfeed->view_counts
        ]);
        // return Newsfeed::findOrFail($newsfeedId);
    }

    public function edit($id)
    {
        $newsfeedEdit = Newsfeed::findorFail($id);
        return view('nfcrud.edit',['update'=>$newsfeedEdit,]);
    }

    public function update(Request $request, $id)
    {
        $newsfeedUpdate = Newsfeed::findorFail($id);
        if (request()->hasFile('image'))
        {
            $host = $request->getHttpHost();
            $path = $request->file('image')->storePublicly('image',['disk' => 'public']);
            $newsfeedUpdate->image = $host.'/'.$path;
        }
        $newsfeedUpdate->title = $request ->input('title');
        $newsfeedUpdate->description = $request ->input('description');
        $newsfeedUpdate->save();
        return redirect('newsfeed');
    }

    public function destroy(Newsfeed $newsfeed)
    {
        $newsfeed->delete();
        return back();
        // dd($newsfeed);
    }
}
