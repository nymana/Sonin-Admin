<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table= "images";
    protected $primarykey='id';
    protected $fillable = ['image','medium','category_id','json','model_type','model_id','created_at','updated_at'];
    public $timestamps = true;
}
