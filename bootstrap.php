<?php 

require './autoload.php';

use Tambaqui\People\Person;
use Tambaqui\MyException;
//$name = (new Person)->setName('Samuelson');

//echo $name.' ';


try{

    $age = (new Person)->setAge(16);

    echo $age;

}catch(MyException $e){

    echo $e->getMessage();

}


//var_dump((new Tambaqui\DB\Postgres)->connect());
//var_dump((new Tambaqui\DB\MySql)->connect());