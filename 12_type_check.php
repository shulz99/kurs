<?php
$a = 'I\'m string';

var_dump(is_numeric($a));
var_dump(is_float($a));
var_dump(is_integer($a));
var_dump(is_string($a));
var_dump($a == 0);
var_dump($a === 0);
var_dump($a == true);
var_dump(is_float($a));

var_dump(gettype($a));