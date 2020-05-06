<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Newspaper extends Model{
    protected $table= "newspapers";
    protected $primarykey='id';
    protected $fillable = ['title','image','file','description','comment_counts','download_counts','view_counts','is_approve','created_at','updated_at'];
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
