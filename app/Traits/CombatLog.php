<?php

namespace App\Traits;

use App\Models\Combat;
use App\Models\CombatLog as Log;

trait CombatLog
{
    protected int $combatId=1;
    protected function setLogEntry($text)
    {
        Log::create(
            [
                'text'=>$text,
                'combat_id'=>$this->combatId
            ]);
        echo $text."<br/>";
    }

}
