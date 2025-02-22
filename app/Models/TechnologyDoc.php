<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TechnologyDoc extends Model
{
    protected $fillable = [
        'slug',
        'sidebar_title',
        'technology',
        'description',
        'code',
        'position',
    ];
}
