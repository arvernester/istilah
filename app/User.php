<?php

namespace App;

use App\Models\Index;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;
    use Sluggable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'guid',
        'slug',
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

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => ['source' => 'name'],
        ];
    }

    public function getGravatarAttribute(): string
    {
        return 'https://www.gravatar.com/avatar/' . md5($this->attributes['email']);
    }

    public function index(): MorphOne
    {
        return $this->morphOne(Index::class, 'indexable');
    }
}
