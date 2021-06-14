<?php

namespace App\Model\Users;

use Illuminate\Database\Eloquent\Model;

class LandingPage extends Model
{
    protected $fillable = ['name', 'email', 'subject', 'message'];
    protected $table = "contacts";
}
