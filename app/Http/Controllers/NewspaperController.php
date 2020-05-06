<?php

namespace App\Http\Controllers;

use App\Model\Newspaper;
use App\Model\Banner;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\Resource;

class NewspaperController extends Controller
{
  public function index()
  {
    $newspaper = Newspaper::orderby('id', 'desc')->get();
    return view('npcrud.newspaper', ['newspapers' => $newspaper,]);
  }

  public function create()
  {
    return view('npcrud.create');
  }

  public function selectIdForBanner(Request $request)
  {
    $f = Newspaper::get('id');
    $bannerStore = new Banner;
    for ($i = 0; $i<$f.count(1);$i++){
      dd($i);
    }
  }

  public function store(Request $request)
  {
    request()->validate([
      'title' => 'required',
      'description' => 'required',
      'image' => 'required|max:100000000',
      'file_url' => 'required|max:100000000'
    ]);

    $newsStore = new Newspaper;
    $newsStore->title = $request->get('title');
    $newsStore->description = $request->get('description');

    $host = request()->getSchemeAndHttpHost();
    request()->file('image')->storeAs('/public/images/newspaper', request()->file('image')->getClientOriginalName());
    request()->file('file_url')->storeAs('/public/file/newspaper', request()->file('file_url')->getClientOriginalName());

    $image = 'storage/images/newspaper/'.request()->file('image')->getClientOriginalName();
    $file =  'storage/file/newspaper/'.request()->file('file_url')->getClientOriginalName();

    $newsStore->image = $host."/".$image;
    $newsStore->file_url = $host."/".$file;
    $newsStore->save();
        // dd('asdasds');
    return redirect()->to('/newspaper');
  }

  public function show($newspaperId)
  {
    return Newspaper::findOrFail($newspaperId);
  }

  public function list()
  {
    $newspaper = Newspaper::all('id','title','file_url','image','description','commentCounts','downloadCounts','viewCounts','created_at');
    $banner = Banner::all('id','newspaper_id','banner_img_path','created_at');

    $collection = collect(['banners','newspapers']);

    return $collection->combine([
      $banner,
      $newspaper,
    ]);
  }

  public function edit($id)
  {
    $newsEdit = Newspaper::findorFail($id);
    return view('npcrud.edit', ['update' => $newsEdit,]);
  }

  public function update(Request $request, $id)
  {
    $newspaperUpdate = Newspaper::findorFail($id);
    $newspaperUpdate->title = $request->get('title');
    $newspaperUpdate->description = $request->get('description');
    if (request()->hasFile('image'))
    {
      $newspaperUpdate->image = request()->file('image')->storeAs('/images/newspaper/', time().request()->file('image')->getClientOriginalName());
    }

    if (request()->hasFile('file_url'))
    {
      $newspaperUpdate->file_url = request()->file('file_url')->storeAs('/file/newspaper/', time().request()->file('file_url')->getClientOriginalName());
    }

    $newspaperUpdate->save();
    return redirect()->to('/newspaper');
  }

  public function destroy(newspaper $newspaper)
  {
    $newspaper->delete();
    return back();
  }
}
