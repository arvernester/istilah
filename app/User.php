<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'guid',
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $appends = [
        'gravatar',
    ];

    protected $dates = [
        'deleted_at',
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function (self $user) {
            $user->guid = (string) Str::uuid();
        });
    }

    public function getGravatarAttribute(): string
    {
        return 'https://www.gravatar.com/avatar/' . md5($this->attributes['email']);
    }
}
