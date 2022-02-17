<?php

namespace Dev\Infrastructure\Model;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $fillable = [
        'name',
        'code'
    ];

    public function keywords()
    {
        return $this->hasMany(LanguageKeyword::class, 'language_id', 'id');
    }
}