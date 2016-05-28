<?php
$a = 10;
$b = 20;
$c = 30;

$symlink = 'a';

echo $symlink, ' = ', $$symlink, PHP_EOL;

$symlink = 'b';

echo $symlink, ' = ', $$symlink, PHP_EOL;

$$symlink = 25;

echo $symlink, ' = ', $$symlink, ' $b=', $b, PHP_EOL;

/*
echo '$a=', $a, ' $b=', $b, ' $c=', $c, PHP_EOL;


$d = 'c';
$e = 'd';

echo $$e, '=', $$$e, PHP_EOL;
*/