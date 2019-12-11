<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table= "comments";
    protected $primarykey='id';
    protected $fillable = ['c_Body','newspaperCommentId','newsfeedCommentId','userCommentId','json','created_at','updated_at'];
    public $timestamps = true;
}
