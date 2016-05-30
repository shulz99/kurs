<?
/*
// =========== Операторы присвоения ==========
$a = ($b = 5) + 4;
echo $a, ' ', $b, PHP_EOL;

$a += 7;
echo $a, PHP_EOL;

$a -= 6;
echo $a, PHP_EOL;

$a *= 2;
echo $a, PHP_EOL;

$a /= 5;
echo $a, PHP_EOL;

$a %= 2;
echo $a, PHP_EOL;

$a = 'Hello';
$a .= ' world';
echo $a, PHP_EOL;

$a = $b = 45;
echo $a, ' ', $b, PHP_EOL;
*/

/*
// =========== Арифметические операторы =========
$a = 5.34 + '45gdffs';
//$a = '38 попугаев'+'1 обезьяна';
//$a = 5 / '2sfse';
//$a = '2gggg'**3;	//Начиная с PHP5.6.0
//$a = 10.5 % 3.3;
//$b = 10.5 - round(10.5 / 3.3)*3.3;
//$a++;
//$a--;
echo $a, ' ', $b, PHP_EOL;
*/

/*
// =========== Строковые операторы =============
//$a = 'DDDDDDD' . 'EEEEEEE';
//$a = 'fdfdf' . 5;
//$a = 5 . 'ggggggg';
echo $a, PHP_EOL;
*/

/*
// ======== Операторы сравнения ===========
$a = 10;
$b = '10';

var_dump($a == $b);
var_dump($a === $b);
var_dump($a != $b);
var_dump($a !== $b);

$b = 15;
var_dump($a > $b);
var_dump($a >= $b);
var_dump($a < $b);
var_dump($a <= $b);
var_dump(true xor false);
*/

/*
// ========== Логические операторы ===========
$a = true;
$b = 0;
var_dump($a && $b);
var_dump($a and $b);
var_dump($a || $b);
var_dump($a or $b);
var_dump($a xor $b);
var_dump(!$a);

//$a = false || true;
//var_dump($a);

//$a = false or true;
//var_dump($a);
*/

// ============ Побитовые операторы =============
//$a = 10;
//$b = 6;
/*
$c = $a&$b;
echo ' ', sprintf('%010d',decbin($a)), PHP_EOL;
echo '&', PHP_EOL;
echo ' ', sprintf('%010d', decbin($b)), PHP_EOL;
echo '------------', PHP_EOL, ' ', sprintf('%010d', decbin($c)), '(',$c, ')',PHP_EOL, PHP_EOL;
*/
/*
$c = $a|$b;
echo ' ', sprintf('%010d',decbin($a)), PHP_EOL;
echo '|', PHP_EOL;
echo ' ', sprintf('%010d', decbin($b)), PHP_EOL;
echo '------------', PHP_EOL, ' ', sprintf('%010d', decbin($c)), '(',$c, ')',PHP_EOL;
*/

/*
$c = $a^$b;
echo ' ', sprintf('%010d',decbin($a)), PHP_EOL;
echo '^', PHP_EOL;
echo ' ', sprintf('%010d', decbin($b)), PHP_EOL;
echo '------------', PHP_EOL, ' ', sprintf('%010d', decbin($c)), '(',$c, ')',PHP_EOL;
*/

/*
$c = ~$a;
echo sprintf('%032d', decbin($a)), PHP_EOL, 
$c, PHP_EOL, 
sprintf('%s', decbin($c)), PHP_EOL;
*/

/**
$c = $a<<1; //$a*(2**N)
echo sprintf('%032d', decbin($a)), PHP_EOL, 
sprintf('%032d', decbin($c)), "($c)", PHP_EOL;
*/

/*
$c = $a>>1; // (int)$a/(2**N)
echo sprintf('%032d', decbin($a)), PHP_EOL, 
sprintf('%032d', decbin($c)), "($c)", PHP_EOL;
*/

// ============ Выражения ==============