<?php

namespace Dev\Infrastructure\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'description',
        'parent_category_id'
    ];
}