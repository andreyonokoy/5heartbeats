<?php

namespace App\Service;

use App\Models\CombatLog;
use App\Models\Combat;

class CombatLogService
{
    protected Combat $combat;
    protected array $logs;
    public function setLog(string $text)
    {
        $this->logs[]=CombatLog::create(
            [
                'text'=>$text,
                'combat_id'=>$this->combat->id
            ]);
    }

    public function setCombat(Combat $combat)
    {
        $this->combat=$combat;
    }

    public function getFullLog():array
    {
        $result=[];
       foreach($this->logs as $log)
       {
           $result[]=$log->text;
       }
       return $result;
    }



}
