<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ {Characters, SkillsSet, Skills,SkillEffect,SkillsTree,SkillType,SkillsConditions};


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



        $skillData = [
            'skillname'=>'Attack',
            'skillTree'=>'Fighting',
            'skillType'=>'Physical damage',
            'skillEffect'=>[
                'effect' => 'BasicAttack',
                'values' => json_encode(['DamageToTarget'=>'10'])
            ],
            'skillCondition'=>[
                'condition' => 'Stamina',
                'values' => json_encode(['CasterLost'=>'10'])
            ]
        ];


        $this->createBasicSkill($skillData);

        echo "<pre>";
        var_dump($skillsSet);
        var_dump($character);
        echo "</pre>";
    }

    public function createBasicSkill(array $skillData)
    {


        list(
            'skillTree' => $skillTreeName,
            'skillType' => $skillTypeName,
            'skillname' => $skillName,
            'skillCondition'=>$skillCondition,
            'skillEffect'=>$skillEffect
            ) = $skillData;


        $skillTree= SkillsTree::updateOrCreate([
            'name' => $skillTreeName
        ]);

        $skillType= SkillType::updateOrCreate([
            'name' => $skillTypeName
        ]);

        $skill= Skills::updateOrCreate([
            'name' => $skillName,
            'skills_tree_id'=>$skillTree->getKey(),
            'skill_type_id'=>$skillType->getKey(),
        ]
        );

        $skillCondition= SkillsConditions::updateOrCreate([
                'condition' => $skillCondition['condition'],
                'values'=>$skillCondition['values'],
                'skills_id'=>$skill->getKey(),
            ]
        );

        $skillEffect= SkillEffect::updateOrCreate([
                'effect' => $skillEffect['effect'],
                'values'=>$skillEffect['values'],
                'skills_id'=>$skill->getKey(),
            ]
        );
    }
}
