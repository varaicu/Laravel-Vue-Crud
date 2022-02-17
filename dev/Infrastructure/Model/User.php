<?php

namespace Dev\Infrastructure\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    protected $fillable = [
        'name',
        'surname',
        'email',
        'email_verified_at',
        'vendor_id',
        'vendor_username',
        'vendor_password',
        'password',
        'type'
    ];

    protected $hidden = [
        'email_verified_at',
        'password',
        'vendor_password',
    ];

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }
}