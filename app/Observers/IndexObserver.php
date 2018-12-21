<?php

namespace App\Observers;

use App\Models\Index;
use Illuminate\Support\Str;

class IndexObserver
{
    public function creating(Index $index)
    {
        $index->guid = (string) Str::uuid();
    }

    /**
     * Handle the index "created" event.
     *
     * @param  \App\Models\Index  $index
     * @return void
     */
    public function created(Index $index)
    {
        //
    }

    /**
     * Handle the index "updated" event.
     *
     * @param  \App\Models\Index  $index
     * @return void
     */
    public function updated(Index $index)
    {
        //
    }

    /**
     * Handle the index "deleted" event.
     *
     * @param  \App\Models\Index  $index
     * @return void
     */
    public function deleted(Index $index)
    {
        //
    }

    /**
     * Handle the index "restored" event.
     *
     * @param  \App\Models\Index  $index
     * @return void
     */
    public function restored(Index $index)
    {
        //
    }

    /**
     * Handle the index "force deleted" event.
     *
     * @param  \App\Models\Index  $index
     * @return void
     */
    public function forceDeleted(Index $index)
    {
        //
    }
}
