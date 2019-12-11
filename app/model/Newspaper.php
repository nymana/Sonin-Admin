<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class
Newspaper extends Model
{
    protected $table= "newspapers";
    protected $primarykey='id';
    protected $fillable = ['title','image','file','description','commentCounts','downloadCounts','viewCounts','isApprove','json','created_at','updated_at'];
    public $timestamps = true;

//    protected $appends = ['cover_url'];
//
//    public function getCoverUrlAttribute()
//    {
//        if ($this->cover_path) {
//            return
//        }
//    }
}
