<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $table = 'works';
    protected $fillable = ['title', 'description', 'image', 'link'];    
}
