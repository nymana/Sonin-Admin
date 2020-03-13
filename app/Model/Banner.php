<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table= "banners";
    protected $primarykey='id';
    protected $fillable = ['newspaper_id','json','banner_img_path'];
    public $timestamps = true;
}
