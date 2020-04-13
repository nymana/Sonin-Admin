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
  public function userslist()
  {
    return Resource::collection(User::all());
  }
  public function newfeedlist()
  {
    return Resource::collection(Newsfeed::all());
  }
  public function newspaperlist()
  {
    $newspaper = Newspaper::all('id','title','image','created_at');
    $banner = Banner::all('id','newspaper_id','banner_img_path','created_at');
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
  public function login(Request $request){
    $mail = User::selectUser($request->all('email'));
    if($mail->isEmpty()){
      return response('Login failed', 404);
    }else{
      return $mail;
    }
  }

  public function commented(Request $request){
    return Comment::create([
      'c_Body' => $request['c_Body'],
      'newspaperCommentId' => $request['newspaperCommentId'],
      'newsfeedCommentId' => $request['newsfeedCommentId'],
      'userCommentId' => $request['userCommentId']
    ]);
  }

  public function newspaperComment($newspaperId){
    return Comment::selectCommentForNewspaper($newspaperId);      
  }

  public function newsfeedComment($newsfeedId){
    return Comment::selectCommentForNewsfeed($newsfeedId);
  }

  public function register(Request $request){
    return User::create([
      'name' => $request['name'],
      'email' => $request['email'],
      'studentid' => $request['studentid'],
      'password' => $request['password']
    ]);
  }
}
