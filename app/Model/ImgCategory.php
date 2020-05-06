<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ImgCategory extends Model
{
    protected $table= "img_categories";
    protected $primarykey='id';
    protected $fillable = ['newsfeed_id','newspaper_id','banner_id','user_id','created_at','updated_at'];
    public $timestamps = true;
}
