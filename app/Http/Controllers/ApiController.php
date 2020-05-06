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
    $newsfeed = Newsfeed::all('id','title','description','image');
    return [
      'data' => $newsfeed
    ];
    // return Resource::collection(Newsfeed::all());
  }

  public function newspaperlist()
  {
    $newspaper = Newspaper::all('id','title','image');
    $banner = Banner::all('id','newspaper_id','image');
    return [
      'data' => [
        [
          'component' => 'banner',
          'data' => $banner
        ],
        [
          'component' => 'newspaper',
          'data' => $newspaper
        ],
      ],
    ];
  }

  public function login(Request $request){
    $user = User::where('email','=',request('email'))->get()->first();
    if(null === $user){
      return response('Login failed', 404);
    }else{
      return $user;
    }
  }

  public function commented(Request $request){
    $createComment =  Comment::create([
      'comment' => $request['comment'],
      'newspaperCommentId' => $request['newspaperCommentId'],
      'newsfeedCommentId' => $request['newsfeedCommentId'],
      'userCommentId' => $request['userCommentId']
    ]);

    $user = User::find($createComment->userCommentId);
  
    $id = $createComment->id;
    $commentText = $createComment->comment;
    return [
      'data' =>[
        'id' => $id,
        'comment' => $commentText ,
        'username' => $user->name,
        'date' => $createComment->created_at
      ]
    ];
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
