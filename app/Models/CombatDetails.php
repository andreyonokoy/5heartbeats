<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CombatDetails extends Model
{
    private array $log=[];

    public function setLog(string $line)
    {
        $this->log[]=$line;
    }
    public function getLog()
    {
        return $this->log;
    }
}
