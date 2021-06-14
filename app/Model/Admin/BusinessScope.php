<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class BusinessScope extends Model
{
    protected $fillable = ['title', 'description1', 'description2', 'image'];
}
