<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkillsConditions extends Model
{
    use HasFactory;
    protected $fillable = ['condition','values','skills_id'];
}
