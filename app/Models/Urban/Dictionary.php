<?php

namespace App\Models\Urban;

use App\Models\Index;
use App\User;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dictionary extends Model
{
    use SoftDeletes;
    use Sluggable;

    protected $table = 'urban_dictionaries';

    protected $fillable = [
        'user_id',
        'guid',
        'slug',
        'word',
        'metadata',
    ];

    protected $casts = [
        'metadata' => 'json',
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
            'slug' => [
                'source' => 'word',
            ],
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function descriptions(): HasMany
    {
        return $this->hasMany(Description::class);
    }

    public function index(): MorphOne
    {
        return $this->morphOne(Index::class, 'indexable');
    }

}
