<?php

namespace App\Service;

use App\Models\CombatLog;
use App\Models\Combat;

class CombatLogService
{
    protected Combat $combat;
    protected array $logs;
    public function __construct(
        CombatLog $combat,
    )
    {
        $this->combat=$combat;
    }

    public function saveLog(string $text)
    {
        $this->logs[]=CombatLog::create(
            [
                'text'=>$text,
                'combat_id'=>$this->combat->id
            ]);
    }
    public function getLog()
    {
        return $this->logs;
    }



}
