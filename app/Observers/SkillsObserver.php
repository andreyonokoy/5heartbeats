<?php

namespace App\Observers;

use App\Models\Skills;

class SkillsObserver
{
    /**
     * Handle the Skills "created" event.
     */
    public function created(Skills $skills): void
    {

    }

    /**
     * Handle the Skills "updated" event.
     */
    public function updated(Skills $skills): void
    {
        //
    }

    /**
     * Handle the Skills "deleted" event.
     */
    public function deleted(Skills $skills): void
    {
        //
    }

    /**
     * Handle the Skills "restored" event.
     */
    public function restored(Skills $skills): void
    {

    }

    /**
     * Handle the Skills "force deleted" event.
     */
    public function forceDeleted(Skills $skills): void
    {
        //
    }
}
