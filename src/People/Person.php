<?php

namespace Tambaqui\People;

use Tambaqui\MyException;

class Person
{
    use \Tambaqui\GetterSetter;

    public function __construct()
    {
        echo 'construtor exec ';
    }

    public function setName(string $name) :string
    {
        return $name;
    }

    public function setAge(int $age) :int
    {
        if($age < 18){
            throw new MyException('Idade inválida', 1);
        }
        return $age;
    }

    public function __call($method, $props) :string
    {
        var_dump($method, $props);
    }

    public function __toString()
    {
        return 'oi';
    }

}