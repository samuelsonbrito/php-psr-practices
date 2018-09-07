<?php 

require './autoload.php';

use Tambaqui\People\Person;
use Tambaqui\MyException;
//$name = (new Person)->setName('Samuelson');

//echo $name.' ';


try{

    $person = new Person;
    $person->name = 'Ronaldo';

    var_dump($person->name);

}catch(MyException $e){

    echo $e->getMessage();

}


//var_dump((new Tambaqui\DB\Postgres)->connect());
//var_dump((new Tambaqui\DB\MySql)->connect());