<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CombatLog extends Model
{
    use HasFactory;

    protected $fillable = ['text','combat_id'];
}
