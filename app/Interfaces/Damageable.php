<?php

namespace App\Interfaces;

interface Damageable
{
    public function getHitPoints():int;
    public function increaseHitPoints(int $amount):int;
    public function descreaseHitPoints(int $amount):int;

    public function isAlive():bool;
}
