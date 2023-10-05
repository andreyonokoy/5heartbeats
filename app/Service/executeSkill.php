<?php

namespace App\Service;
use App\Models\Skills;
use App\Models\Characters;

class executeSkill
{
    private Skills $skill;
    protected Characters $character;
    protected Characters $target;

    protected boolean $succes=false;
    public function __construct(Skills $skill, Characters $character, Characters $target)
    {
        $this->skill=$skill;
        $this->character=$character;
        $this->target=$target;
    }

    private function run(): bool
    {
        /*Run skill logic*/
        if ($this->checkConditions()) {
            $this->calculateResult();
            $this->succes=true;
        }

        return $this->success;
    }

    protected function checkConditions(): bool
    {
        if (true)
        {
            return true;
        }
        return false;
    }

    protected function calculateResult(): void
    {
        /*calculate skill execution resul*/
    }

    protected function success(): bool
    {
        return $this->succes;
    }

}
