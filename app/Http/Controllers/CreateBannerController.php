<?php

namespace App\Http\Controllers;

use App\Model\CreateBanner;
use App\Model\Newspaper;
use App\Model\Banner;
use Illuminate\Http\Request;

class CreateBannerController extends Controller
{
    public function index()
    {
        return view('banners.insert');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
      $banner = Banner::orderby('id', 'desc')->get();

      request()->validate([
          'image' => 'required|image|mimes:jpeg,png,jpg,svg|max:5048',
      ]);
      $path = $request->file('image')->storePublicly('image',['disk' => 'public']);
      $host = $request->getSchemeAndHttpHost();
      $url = $host."/".$path;
      $check = Banner::insertGetId([
          'image' => $url
      ]);
      return redirect()->back()->withSuccess('Great! Image has been successfully uploaded.');
    }

    public function show(CreateBannerController $createBannerController)
    {
        //
    }

    public function edit(CreateBannerController $createBannerController)
    {
        //
    }

    public function update(Request $request, CreateBannerController $createBannerController)
    {
        //
    }

    public function destroy(CreateBannerController $createBannerController)
    {
        //
    }

    public function addBanner(Banner $banner, Newspaper $news)
    {
      $banner->newspaper_id = $news->id;
      $banner->save();
      return redirect('/banners');
      // dd($banner, $news);
    }
}