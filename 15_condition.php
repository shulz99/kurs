<?
$a = 10;
$b = 5;

if($a > $b){
	echo '$a > $b', PHP_EOL;
}
elseif($a < $b){
	echo '$a < $b', PHP_EOL;
}
else{
	echo '$a == $b', PHP_EOL;
}

$c = $a > $b ? $a : $b;
echo $c, PHP_EOL;

$a = 'two';

switch ($a){
	case 'one':
		echo 1, PHP_EOL;
		break;
	case 'two':
		echo 2, PHP_EOL;
		break;
	case 'three':
		echo 3, PHP_EOL;
		break;
	case 'four':
	case 'five':
		echo 'many';
		break;
	default:
		echo 'unknown', PHP_EOL;
}