<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table= "banners";
    protected $primarykey='id';
    protected $fillable = ['newspaper_id','image'];
    public $timestamps = true;

    public function newspaper() 
    {
    	return $this->belongsTo(Newspaper::class);
    }
}
