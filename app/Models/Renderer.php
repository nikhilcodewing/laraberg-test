<?php
namespace App\Models;


use VanOns\Laraberg\Traits\RendersContent;

use Illuminate\Database\Eloquent\Model;

class Renderer extends Model
{
    use RendersContent;

    protected $contentColumn = 'content';


}
