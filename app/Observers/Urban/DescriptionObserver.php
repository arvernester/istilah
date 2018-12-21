<?php

namespace App\Observers\Urban;

use App\Models\Urban\Description;
use Illuminate\Support\Str;

class DescriptionObserver
{
    /**
     * Handle the description "creating" event.
     *
     * @param Description $description
     * @return void
     */
    public function creating(Description $description): void
    {
        $description->guid = (string) Str::uuid();
    }

    /**
     * Handle the description "created" event.
     *
     * @param  \App\Models\Urban\Description  $description
     * @return void
     */
    public function created(Description $description)
    {
        //
    }

    /**
     * Handle the description "updated" event.
     *
     * @param  \App\Models\Urban\Description  $description
     * @return void
     */
    public function updated(Description $description)
    {
        //
    }

    /**
     * Handle the description "deleted" event.
     *
     * @param  \App\Models\Urban\Description  $description
     * @return void
     */
    public function deleted(Description $description)
    {
        //
    }

    /**
     * Handle the description "restored" event.
     *
     * @param  \App\Models\Urban\Description  $description
     * @return void
     */
    public function restored(Description $description)
    {
        //
    }

    /**
     * Handle the description "force deleted" event.
     *
     * @param  \App\Models\Urban\Description  $description
     * @return void
     */
    public function forceDeleted(Description $description)
    {
        //
    }
}
