<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Login extends Authenticatable
{
    use Notifiable;

    protected$primaryKey = 'user_id';

    protected$fillable = [
        'user_id', 'email', 'password'
    ];

    protected $hidden = ['password'];

    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getRememberTokenName()
    {
        return null; // not supported
    }

    /**
     * Overrides the method to ignore the remember token.
     */
    public function setAttribute($key, $value)
    {
        $isRememberTokenAttribute = $key == $this->getRememberTokenName();
        if (!$isRememberTokenAttribute) {
            parent::setAttribute($key, $value);
        }
    }
}
