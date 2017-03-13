<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require __DIR__ . '/../vendor/autoload.php';

class Test
{
    public static $a = 'b';
}

$o1 = new Test();
$o2 = new Test();

//$o2::$a = 'c';
echo $o1::$a;
echo $o2::$a;

