<?php

namespace App\Service;
use App\Exceptions\SkillConditionException;
use App\Exceptions\SkillEffectException;
use App\Interfaces\Damageable;
use App\Models\Skills;
use App\Models\Characters;
use App\Traits\CombatLog;


class ExecuteSkill
{
    use CombatLog;
    private Skills $skill;
    protected Characters $caster;
    protected Damageable $target;

    protected bool $success=false;

    private function run(): bool
    {
        $this->checkConditions();
        $this->applyEffects();

        return $this->success;
    }

    protected function checkConditions()
    {
        foreach($this->skill->getConditions() as $condition)
        {
            $className='App\Conditions\\'.$condition->getAttribute('condition');
            $values=json_decode($condition->getAttribute('values'),true);
            if (class_exists($className))
            {
                $skillCondition = new $className(
                    $this->caster,
                    $this->target,
                    $values
                );
            }
            else
            {
                Throw new SkillConditionException('Can\'t find a class '.$className.' for skill '.$this->skill->name);
            }
        }
    }

    protected function applyEffects()
    {
        foreach($this->skill->getEffects() as $effect)
        {
            $className='App\Effects\\'.$effect->getAttribute('effect');
            $values=json_decode($effect->getAttribute('values'),true);
            if (class_exists($className))
            {
                $skillEffect= new $className(
                    $this->caster,
                    $this->target,
                    $values
                );
            }
            else
            {
                Throw new SkillEffectException('Can\'t find a class '.$className.' for skill '.$this->skill->name);
            }
        }
    }

    public function __invoke(Skills $skill, Characters $caster, Damageable $target):bool
    {
        $this->skill=$skill;
        $this->caster=$caster;
        $this->target=$target;

        $this->setLogEntry($caster->name.' is attempting to use skill '.$skill->name.' on '.$target->name);

        return $this->run();
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
