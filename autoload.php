<?php

require './src/Autoload.php';

$autoload = new Tambaqui\Autoload();
$autoload->register();
$autoload->addNamespace('Tambaqui','src');