<?php

namespace App\Http\Controllers;

use App\Models\Combat;
use App\Models\Skills;
use App\Service\ExecuteSkill;
use App\Service\SkillsService;
use Illuminate\Http\Request;
use App\Education\MagicMethods;
use App\Models\Characters;
use App\Service\CombatLogService;
use Illuminate\Contracts\Foundation\Application;

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
        $combatId=1;
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

    public function serviceProvider(Request $request)
    {
        $combat = Combat::create();

        $combatLog = resolve(CombatLogService::class);
        $combatLog->setCombat($combat);

        $superHero=Characters::find(1);
        $goblin=Characters::find(2);
        $skillAttack = SkillsService::get(1);
        $executeSkill = new ExecuteSkill();
        $executeSkill($skillAttack,$superHero,$goblin);
        dd($combatLog->getFullLog());
    }

    public function labPDO1(Request $request)
    {
        $dsn = 'mysql:dbname=phpcourse;host=127.0.0.1;port=3306';
        try {
            $pdo = new \PDO($dsn, 'vagrant', 'vagrant');
            $smtp=$pdo->prepare('INSERT INTO customers (firstname,lastname) VALUES (:firstname,:lastname)');
            $firstname='Jhon';
            $lastname='Doe';
            $smtp->bindParam(':firstname',$firstname);
            $smtp->bindParam(':lastname',$lastname);
            $smtp->execute();
        }
        catch (Exception $e) {
            dd($e->getMessage());
        }

    }


    public function labPDO2(Request $request)
    {
        $dsn = 'mysql:dbname=phpcourse;host=127.0.0.1;port=3306';



        $pdo = new \PDO($dsn, 'vagrant', 'vagrant');
        $sql = 'CALL getuserscountbyname2(?)';
        $stmt = $pdo->prepare($sql);

        $firstname = "John";
       // $count=0;


        $stmt->bindValue(1, $firstname);
        //$stmt->bindParam(2, $count,\PDO::PARAM_STR, 32);

        $stmt->execute();

        $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);

        dd($result);
       // var_dump($count);
    }

    public function labPDO3(Request $request)
    {
        $dsn = 'mysql:dbname=phpcourse;host=127.0.0.1;port=3306';
        $pdo = new \PDO($dsn, 'vagrant', 'vagrant');
        try {

            $pdo->beginTransaction();
            $smtp=$pdo->prepare('INSERT INTO customers (firstname,lastname) VALUES (:firstname,:lastname)');
            $firstname='Loid';
            $lastname='Parish';
            $smtp->bindParam(':firstname',$firstname);
            $smtp->bindParam(':lastname',$lastname);
            $smtp=$pdo->prepare('SELECT * FROM customers WHERE firstname1=1');
            $smtp->execute();
            $pdo->commit();
        }
        catch (Exception $e) {
            $pdo->rollBack();
            dd($e->getMessage());
        }
    }



}
