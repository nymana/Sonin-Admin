<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table= "users";
    protected $primarykey='id';
    protected $fillable = ['name','gender','birthday','phone','email','password','json','created_at','updated_at'];
    public $timestamps = true;
}
