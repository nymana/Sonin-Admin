<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Newsfeed extends Model
{
    protected $table= "newsfeeds";
    protected $primarykey='id';
    protected $fillable = ['title','description','image','comment_counts','love_counts','view_counts','is_approve','created_at','updated_at'];
    public $timestamps = true;
}
