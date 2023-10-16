<?php

namespace App\Conditions;

class Stamina extends AbstractCondition
{

    public function apply()
    {
        if (true)
        {
            $this->setLogEntry('The condition of skill is fulfilled.');
        }
        else
        {
            $this->setLogEntry('The condition of skill isn\'t fulfilled.');
        }
    }

}
