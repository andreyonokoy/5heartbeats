<?php

namespace App\Effects;

class BasicAttack extends AbstractEffect
{
    public function apply()
    {
        $damageAmount=$this->values['DamageToTarget'];
        $this->setLogEntry('Successful attack makes '.$damageAmount.' dmg');
        $this->target->descreaseHitPoints($damageAmount);
    }
}
