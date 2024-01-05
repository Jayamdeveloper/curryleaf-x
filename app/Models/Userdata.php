<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userdata extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $except = ['name','email','password','phone','dob','gender'];
    protected $table = 'users';
}
