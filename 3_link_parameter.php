<?php
function foo(&$var){
	$var++;
	echo '$var=', $var, PHP_EOL;
}

$a = 10;
foo($a);

echo '$a=', $a, PHP_EOL;

foo($a=8);

/*
function &bar(){
	$a = 5;
	return $a;
}

foo(bar());
*/

/**
function bar($var){
	$var++;
}

bar($a);
echo '$a=', $a, PHP_EOL;
*/