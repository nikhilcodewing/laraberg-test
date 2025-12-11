<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use VanOns\Laraberg\Traits\RendersContent;

class Post extends Model
{
    use RendersContent;

    protected $fillable = [
        'title',
        'content',
    ];
}

