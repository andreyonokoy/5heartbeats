<?php

namespace App\Http\Controllers;

use App\Models\SkillsSet;
use Illuminate\Http\Request;
use App\Models\Characters;

class CharacterController extends Controller
{
    public function create()
    {
        $skillsSet = SkillsSet::create([]);
        $character = Characters::create([
            'name' => 'randomName',
            'level' => 1,
            'experience' => 100,
            'skills_set_id'=>$skillsSet->id
        ]);

        echo "<pre>";
        var_dump($skillsSet);
        var_dump($character);
        echo "</pre>";
    }
    //
}
