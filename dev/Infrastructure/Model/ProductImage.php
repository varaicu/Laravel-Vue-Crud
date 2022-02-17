<?php

namespace Dev\Infrastructure\Model;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $fillable = [
        'url',
        'product_id',
    ];

}