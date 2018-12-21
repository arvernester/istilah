<?php

namespace App\Models\Urban;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Description extends Model
{
    use SoftDeletes;

    protected $table = 'urban_descriptions';

    protected $fillable = [
        'dictionary_id',
        'user_id',
        'guid',
        'description',
    ];

    protected $casts = [
        'dictionary_id' => 'integer',
        'user_id' => 'integer',
    ];

    protected $dates = [
        'deleted_at',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function dictionary(): BelongsTo
    {
        return $this->belongsTo(Dictionary::class);
    }
}
