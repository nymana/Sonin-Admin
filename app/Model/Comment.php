<?php

namespace App\Model;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table= "comments";
    protected $primarykey='id';
    protected $fillable = ['c_Body','newspaperCommentId','newsfeedCommentId','userCommentId','created_at','updated_at'];
    public $timestamps = true;

    public static function selectCommentForNewspaper($newspaperId){
        return DB::table('comments')
                    ->select('comments.id','comments.c_Body as comment','users.name AS username')
                    ->join('users','users.id','=','comments.userCommentId')
                    ->where('newspaperCommentId',$newspaperId)
                    ->get();
    }

    public static function selectCommentForNewsfeed($newsfeedId){
        return DB::table('comments')
                    ->select('comments.id','comments.c_Body as comment','users.name AS username')
                    ->join('users','users.id','=','comments.userCommentId')
                    ->where('newsfeedCommentId',$newsfeedId)
                    ->get();
    }
}
