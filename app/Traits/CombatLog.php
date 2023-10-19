<?php

namespace App\Traits;
use App\Service\CombatLogService;
use App\Providers\CombatLogServiceProvider;

trait CombatLog
{
    protected int $combatId=1;
    protected function setLogEntry($text)
    {
        CombatLogServiceProvider::instance()->setLog($text);
    }

}
