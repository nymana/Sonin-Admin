<?php

namespace App\Http\Controllers;

use App\Model\Banner;
use App\Model\Newspaper;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\Resource;

class BannersController extends Controller
{

  public function index()
  {
    $banner =  Banner::orderbyDesc('id')->get();
    $newspaper =  Newspaper::orderbyDesc('id')->get();
    return view('banners.banner',['banners'=>$banner]);
  }

  public function create()
  {
    //
  }


  public function store(Request $request)
  {
    return view('banners.bannerImgUpload');
  }

  public function show($newspaperId)
  {

  }

  public function edit(banner $banner)
  {
    //
  }

  public function update(Request $request, banner $banner)
  {
    //
  }

  public function destroy(banner $banner)
  {
    //
  }

  public function bannerlist()
  {
    return Resource::collection(Banner::all());
  }

}
