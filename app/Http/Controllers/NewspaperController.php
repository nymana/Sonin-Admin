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

    $filePath = $request->file('file_url')->storePublicly('file',['disk' => 'public']);
    $imagePath = $request->file('image')->storePublicly('image',['disk' => 'public']);

    $newsStore->image = $host."/".$imagePath;
    $newsStore->file_url = $host."/".$filePath;
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

    $host = request()->getSchemeAndHttpHost();
    $newspaperUpdate = Newspaper::findorFail($id);
    $newspaperUpdate->title = $request->get('title');
    $newspaperUpdate->description = $request->get('description');
    if (request()->hasFile('image'))
    {
      $newspaperUpdate->image = $host."/".$request->file('image')->storePublicly('image',['disk' => 'public']);
    }

    if (request()->hasFile('file_url'))
    {
      $newspaperUpdate->file_url = $host."/".$request->file('file_url')->storePublicly('file',['disk' => 'public']);
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
