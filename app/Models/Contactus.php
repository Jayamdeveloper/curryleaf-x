<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contactus extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $except = ['name','email','message','reply_status','reply_message'];
    protected $table = 'contact_us';
}
