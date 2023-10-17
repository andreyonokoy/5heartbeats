<?php

namespace App\Http\Controllers;

use App\Models\Skills;
use App\Service\ExecuteSkill;
use App\Service\SkillsService;
use Illuminate\Http\Request;
use App\Education\MagicMethods;
use App\Models\Characters;

class EducationController extends Controller
{
    public function index(Request $request, string $lab)
    {
        $this->{$lab}($request);
    }
    public function labMagicMethods(Request $request)
    {
        $magicMethods=new MagicMethods('someParam1','someParam2');

        $magicMethods->someMethod('someParameter1','someParameter2');

        $magicMethods->someProperty='somePropertyValue';

        echo $magicMethods->someProperty;

        MagicMethods::someStaticMethod(['arrayValue1','arrayValue2']);

        $magicMethods->methodWithIsset('someStartingProperty');
        $result=serialize($magicMethods);
        var_dump($result);
        $magicMethods=unserialize($result);
        var_dump($result);

        echo $magicMethods; //toString

        $magicMethods('data');

        var_export($magicMethods);

        $magicMethodsClone = clone $magicMethods;

        var_dump($magicMethods);
    }

    public function labInterfaces(Request $request)
    {
        $superHero=Characters::find(1);
        $goblin=Characters::find(2);
        $skillAttack = SkillsService::get(1);
        $executeSkill = new ExecuteSkill();
        $executeSkill($skillAttack,$superHero,$goblin);

    }

    public function labExceptions(Request $request)
    {
        $superHero=Characters::find(1);
        $goblin=Characters::find(2);
        $skillAttack = SkillsService::get(3);
        // dd($skillAttack->getConditions());
        $executeSkill = new ExecuteSkill();
        $executeSkill($skillAttack,$superHero,$goblin);

    }

}
