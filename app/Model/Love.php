<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Love extends Model
{
    protected $table= "img_categories";
    protected $primarykey='id';
    protected $fillable = ['newsfeed_loves','newspaper_loves','user_loves','created_at','updated_at'];
    public $timestamps = true;
}
