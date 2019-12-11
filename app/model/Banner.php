<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table= "banners";
    protected $primarykey='id';
    protected $fillable = ['newspaper_id','json','created_at','updated_at'];
    public $timestamps = true;
}
