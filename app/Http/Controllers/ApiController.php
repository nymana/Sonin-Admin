<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\Resource;
use Illuminate\Http\Resources\Json\ResourceCollection;

use App\Model\Banner;
use App\Model\Comment;
use App\Model\Newsfeed;
use App\Model\Newspaper;
use App\Model\User;

class ApiController extends Controller
{

  public function commnetslist()
  {
    return Resource::collection(Comment::all());
  }

  public function comment($commnetId)
  {
    return Comment::findOrFail($commnetId);
  }

  public function userslist()
  {
    return Resource::collection(User::all());
  }

  public function user($userId)
  {
    // dd($userId);
    return User::findOrFail($userId);
  }




  public function dlist()
  {
    $newspaper = Newspaper::all('id','title','image','created_at');
    $banner = Banner::all('id','newspaper_id','banner_img_path','created_at');

    $collection = collect(['banners','newspapers']);

    $out = Resource::collection($collection->combine([ $banner, $newspaper, ]));

    $n = Resource::collection(Newspaper::all());
    $b = Resource::collection(Banner::all());


    return [
      'data' => [
        [
          'component' => 'banner',
          'data' => $b
        ],
        [
          'component' => 'newspaper',
          'data' => $n
        ],
      ],
    ];
  }

}
