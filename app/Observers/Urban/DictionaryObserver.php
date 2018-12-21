<?php

namespace App\Observers\Urban;

use App\Models\Index;
use App\Models\Urban\Dictionary;
use Illuminate\Support\Str;

class DictionaryObserver
{
    /**
     * Handle the dictionary "creating" event.
     *
     * @param Dictionary $dictionary
     * @return void
     */
    public function creating(Dictionary $dictionary): void
    {
        $dictionary->guid = (string) Str::uuid();
    }

    /**
     *  Handle the dictionary "created" event.
     *
     * @param Dictionary $dictionary
     * @return void
     */
    public function created(Dictionary $dictionary): void
    {
        $dictionary->index()->save(new Index([
            'title' => $dictionary->word,
            'description' => $dictionary->metadata['description'] ?? '',
            'metadata' => [],
            'is_public' => true,
        ]));
    }

    /**
     * Handle the dictionary "updated" event.
     *
     * @param  \App\Models\Urban\Dictionary  $dictionary
     * @return void
     */
    public function updated(Dictionary $dictionary)
    {
        //
    }

    /**
     * Handle the dictionary "deleted" event.
     *
     * @param  \App\Models\Urban\Dictionary  $dictionary
     * @return void
     */
    public function deleted(Dictionary $dictionary)
    {
        //
    }

    /**
     * Handle the dictionary "restored" event.
     *
     * @param  \App\Models\Urban\Dictionary  $dictionary
     * @return void
     */
    public function restored(Dictionary $dictionary)
    {
        //
    }

    /**
     * Handle the dictionary "force deleted" event.
     *
     * @param  \App\Models\Urban\Dictionary  $dictionary
     * @return void
     */
    public function forceDeleted(Dictionary $dictionary)
    {
        //
    }
}
