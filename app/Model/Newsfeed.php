<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Newsfeed extends Model
{
    protected $table= "newsfeeds";
    protected $primarykey='id';
    protected $fillable = ['bodyText','commentCounts','loveCounts','viewCounts','isApprove','json','created_at','updated_at'];
    public $timestamps = true;
}
