<?php

namespace App\Service;
use App\Models\Characters;
use App\Models\Skills;
use App\Service\executeSkill;

class executeConcreteSkill extends executeSkill
{
    public function __construct(Skills $skill, Characters $character)
    {
        $this->skill=$skill;
        $this->character=$character;
        $this->target=$character;
    }

    protected function checkConditions(): bool
    {
        if (false)
        {
            return true;
        }
        return false;
    }

    protected function calculateResult(): void
    {
        /*calculate skill execution resul*/
    }

}
