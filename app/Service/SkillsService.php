<?php

namespace App\Service;
use App\Models\SkillEffect;
use \App\Models\Skills;
use App\Models\SkillsConditions;

class SkillsService
{
    public static function get($id)
    {
        $skill = Skills::find($id);

        if (isset($skill->id))
        {
            $skill->conditions=SkillsConditions::where('skills_id',$skill->id)->get();
            $skill->effects=SkillEffect::where('skills_id',$skill->id)->get();
        }
        return $skill;
    }
}
