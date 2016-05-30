<?php

//Boolean
$a = true;
$b = false;
var_dump($a, $b);

//Integer
$a = 10;
var_dump($a);

//Float
$a = 10.5;
var_dump($a);

//Array
$a = array(1,2);
$b = ['a'=> 3, 'b'=>4];
var_dump($a, $b);

//String
$a = 'This string';
var_dump ($a);

//Object
$a = function(){};
var_dump($a);

//Resource
$f = fopen('8_echo_vs_print.php', 'r');
var_dump($f);
fclose($f);