<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Interfaces\Damageable;
use App\Traits\CombatLog;


class Characters extends Model implements Damageable
{
    protected $fillable = ['name','level','experience','skills_set_id'];
    private const maxLevel=20;
    protected $hitPoints;
    protected $maxHitpoints;
    protected $status;
    protected const hitPointsPerLevel = 3;
    protected const ExperiencePerLevel=100;

    use HasFactory, CombatLog;

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->hitPoints= $this->maxHitpoints=$this->level*$this->hitPointsPerLevel;
        $this->status='alive';
    }

    public function getName():string
    {
        return $this->name;
    }
    public function getLevel():int
    {
        return $this->level;
    }

    public function getStatus():string
    {
        return $this->status;
    }

    public function isAlive():bool
    {
        return ($this->status == 'alive') ?? true :: false;
    }

    public function getHitPoints():int
    {
        return $this->hitPoints;
    }
    public function increaseHitPoints(int $amount):int
    {
        $this->hitPoints=$this->hitPoints+$amount;
        $this->checkHitPointsAmount();
        return $this->getHitPoints();
    }
    public function descreaseHitPoints(int $amount):int
    {
        $this->hitPoints=$this->hitPoints-$amount;
        $this->checkHitPointsAmount();
        return $this->getHitPoints();
    }

    protected function setDeadStatus():void
    {
        $this->status='dead';
        $this->setLogEntry('Character '.$this->getName().' is dead');
    }

    protected function checkHitPointsAmount():void
    {
        if ($this->hitPoints>$this->maxHitpoints)
        {
            $this->hitPoints=$this->maxHitpoints;
        }
        if ($this->hitPoints<=0)
        {
            $this->hitPoints=0;
            $this->setDeadStatus();
        }

    }

}
