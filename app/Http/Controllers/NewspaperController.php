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

  }
  public function selectIdForBanner(Request $request)
  {
    $f = Newspaper::get('id');
    $bannerStore = new Banner;
    //        $bannerStore->newspaper_id = $request->get('newspaper_id');
    for ($i = 0; $i<$f.count(1);$i++){
      dd($i);
    }
    //        $bannerStore->newspaper_id = $f;
    //         $bannerStore = Banner::newspaper_id;
    //         $bannerStore = $f;
    //        $bannerStore->save();
  }
  public function store(Request $request)
  {
    $newsStore = new Newspaper;
    $newsStore->title = $request->get('title');
    $newsStore->save();
    return redirect()->to('npcrud.edit');
  }
  public function show($newspaperId)
  {
    return Newspaper::findOrFail($newspaperId);
  }

  public function list()
  {
    $newspaper = Newspaper::all('id','title','file','image','description','commentCounts','downloadCounts','viewCounts','created_at');
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
    $newspaperUpdate->save();
    return back();
  }
  public function destroy(newspaper $newspaper)
  {
    //
  }
}
