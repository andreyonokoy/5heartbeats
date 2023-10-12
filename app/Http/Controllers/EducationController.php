<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Education\MagicMethods;

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

    public function labAbstractClasses(Request $request)
    {

    }

}
