<?php
//$arr = ['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'];
//$en = [];
//$ru = [];
//
//foreach($arr as $k=>$v){
//	$en[] = $k;
//	$ru[] = $v;
//}
//
//print_r($en);
//print_r($ru);

//$arr = [2, 5, 9, 15, 0, 4];
//foreach ($arr as $val){
//	if($val > 3 && $val < 10){
//		echo $val, PHP_EOL;
//	}
//}

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$str = '';
foreach ($arr as $k=>$v){
	$arr[$k+1] = 0;
	print_r($arr);
	echo $v, PHP_EOL;
}
echo $str, PHP_EOL;
//
//echo implode('', $arr), PHP_EOL;

//for($i=2; $i<=100; $i++){if($i % 2 == 0)echo $i, PHP_EOL;}
//
//$a = 1;
//for($i=1; $i<3; $i++) {
//	$a *= $i;
//}
//
//echo $a;

//$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
//var_dump($arr);
//print ($arr);