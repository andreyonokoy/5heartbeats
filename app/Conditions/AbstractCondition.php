<?php

namespace App\Conditions;
use App\Models\Characters;
use App\Traits\CombatLog;

abstract class AbstractCondition
{
    use CombatLog;
    private array $effectValues=[];
    protected Characters $caster;
    protected Characters $target;
    abstract function apply();

    public function __construct(Characters $caster, Characters $target, array $values)
    {
        $this->values=$values;
        $this->caster=$caster;
        $this->target=$target;

        $this->apply();
    }

}
