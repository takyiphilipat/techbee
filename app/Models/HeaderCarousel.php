<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeaderCarousel extends Model
{
    protected $table = 'header_carousels';
    protected $fillable = ['image_path', 'description'];

     protected $attributes = [
        'description' => 'Where thoughtful design meets powerful,maintainable code.',
    ];

    public $timestamps = false;
}
