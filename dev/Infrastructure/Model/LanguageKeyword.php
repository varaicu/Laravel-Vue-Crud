<?php

namespace Dev\Infrastructure\Model;

use Illuminate\Database\Eloquent\Model;

class LanguageKeyword extends Model
{
    protected $fillable = [
        'keyword',
        'language_code',
        'product_id',
        'tr',
        'en',
        'ar',
        'kr',
    ];
}