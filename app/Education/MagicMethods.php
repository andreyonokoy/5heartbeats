<?php

namespace App\Education;

class MagicMethods
{
    protected string $someStartingProperty = 'some value';
    protected string $param1;
    protected string $param2;

    public function __construct($param1,$param2)
    {
        $this->param1=$param1;
        $this->param2=$param2;

        $this->print("<pre>");
        $this->print("construct");
    }

    private function print($text)
    {
        echo $text . "<br/><hr/>";
    }

    private static function printStatic($text)
    {
        echo $text . "<br/><hr/>";
    }

    public function __destruct()
    {
        $this->print("destruct");
        $this->print("<pre>");
    }

    public function __call($name, $arguments)
    {
        $this->print("method->" . $name);
        print_r($arguments);
    }

    public static function __callStatic($name, $arguments)
    {
        self::printStatic("method->" . $name);
        print_r($arguments);
    }

    public function __get($value)
    {
        $this->print("value>" . $value);
    }

    public function __set($name, $value)
    {
        $this->print("name->" . $name);
        $this->print("name->" . $value);
    }

    public function __isset($value)
    {
        $success = false;
        if (isset($this->{$value}))
            $success = true;

        $this->print("success->" . $success);

        return $success;
    }

    public function methodWithIsset($value)
    {
        return (isset($this->newProperty123) && $this->__isset($this->someStartingProperty)) ?? true :: false;
    }

    public function __unset($value)
    {
    }

    public function __sleep()
    {
        $this->print("executed sleep");
    }

    public function __wakeup()
    {
        $this->print("executed unsleep");
    }

    public function __serialize()
    {
        $this->print("executed serialize");
        return ['someArra'];
    }

    public function __unserialize($object)
    {
        $this->print("executed unserialize");
    }

    public function __toString()
    {
        $this->print("executed __toString");
        return json_encode(['something']);
    }

    public function __invoke()
    {
        $this->print("executed invoke");
    }

    public static function __set_state(array $property)
    {
        self::printStatic('set state');
    }

    public function __clone()
    {
        $this->print("executed clone");
    }

    public function __debugInfo()
    {
        $this->print("executed debugInfo");
    }

}
