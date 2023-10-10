<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkillEffect extends Model
{
    use HasFactory;
    protected $fillable = ['effect','values','skills_id'];
}
