<?php

namespace App\Effects;
use App\Models\Characters;

abstract class AbstractEffect
{
    private array $effectValues=[];
    protected string $logEntry='';
    protected Characters $caster;
    protected Characters $target;
    abstract function apply();

    public function __construct(Characters $caster, Characters $target, array $effectValues)
    {
        $this->effectValues=$effectValues;
        $this->caster=$caster;
        $this->target=$target;

        $this->execute();

        return $this->logEntry;
    }

    private function execute()
    {
        $this->apply();
        $this->setLogEntry();
    }

    protected function setLogEntry()
    {
        return $this->logEntry;
    }

}
