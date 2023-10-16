<?php

namespace App\Models;

use App\Models\SkillsConditions;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SkillEffect;

class Skills extends Model
{
    use HasFactory;
    protected $fillable = ['name','skills_tree_id','skill_type_id'];
    protected array $conditions=[];
    protected array $effects=[];

    public function getConditions()
    {
        return $this->getAttribute('conditions');
    }

    public function getEffects()
    {
        return $this->getAttribute('effects');
    }

}
