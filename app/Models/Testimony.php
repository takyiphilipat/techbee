<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimony extends Model
{
    protected $fillable = [
        'name',
        'role',
        'message',
        'image',
    ];
    protected $table = 'testimonies';
    public $timestamps = false;
}
