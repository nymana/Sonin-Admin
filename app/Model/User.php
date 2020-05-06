<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table= "users";
    protected $primarykey='id';
    protected $fillable = ['name','studentid','email','password','created_at','updated_at'];
    public $timestamps = true;
}
