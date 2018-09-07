<?php

namespace Tambaqui\People;

use Tambaqui\MyException;

class Person
{
    public function setName(string $name): string
    {
        return $name;
    }

    public function setAge(int $age): int
    {
        if($age < 18){
            throw new MyException('Idade inválida', 1);
        }
        return $age;
    }

}