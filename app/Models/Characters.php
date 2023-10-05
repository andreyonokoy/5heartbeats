<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Characters extends Model
{
    protected $fillable = ['name','level','experience','skills_set_id'];
    private const maxLevel=20;
    private const ExperiencePerLevel=100;

    use HasFactory;

    public function getName()
    {
        return $this->name;
    }
    public function getLevel()
    {
        return $this->level;
    }

}
