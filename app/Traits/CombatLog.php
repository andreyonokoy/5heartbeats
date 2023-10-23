<?php

namespace App\Traits;
use App\Service\CombatLogService;

trait CombatLog
{
    protected function setLogEntry($text)
    {
        resolve(CombatLogService::class)->setLog($text);
    }

}
