<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Index extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'guid',
        'category',
        'title',
        'description',
        'metadata',
        'is_public',
    ];

    protected $cast = [
        'metadata' => 'json',
        'is_public' => 'boolean',
    ];

    protected $dates = [
        'deleted_at',
    ];

    protected $appends = [
        'updated_timespan',
    ];

    public function indexable(): MorphTo
    {
        return $this->morphTo();
    }

    public function getUpdatedTimespanAttribute(): string
    {
        return Carbon::parse($this->attributes['updated_at'])->diffForHumans();
    }
}
