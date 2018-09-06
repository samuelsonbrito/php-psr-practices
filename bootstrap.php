<?php 

require './autoload.php';

//use Tambaqui\People\Person;

//$name = (new Person)->setName('Samuelson');

//echo $name.' ';

//$age = (new Person)->setAge(21);

//echo $age;

var_dump((new Tambaqui\DB\Postgres)->connect());
var_dump((new Tambaqui\DB\MySql)->connect());