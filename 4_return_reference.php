<?php
$a = 100;
$b = 200;
/* Далее идет функция, которая возвращает ссылку */
function &s ($var) {
  global $a, $b;
  
  if('a' == $var)
	return $a;
  else
	return $b;
}
// Присваиваем ссылку переменной $c
$c = &s('a');
echo $c, PHP_EOL;

$c = &s('');
echo $c, PHP_EOL;

$c = 0;
echo '$a=', $a, ' $b=', $b, PHP_EOL;
?>