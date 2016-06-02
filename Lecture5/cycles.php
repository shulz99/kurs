<?php
//for($i=0, $j=4; $i<10, $j>0; $i++, $j--){
//	echo $i, ' ', $j, PHP_EOL;
//}

$i = 0;
$j = 4;
//while($i<10 and $j>0){
//	echo $i, ' ', $j, PHP_EOL;
//	$i++;
//	$j--;
//}

//do{
//	echo $i, ' ', $j, PHP_EOL;
//	$i++;
//	$j--;
//}while($i<10 and $j>0);

$arr = [1,2,3,4,5];
$arr1 = [5,4,3,2,1];
foreach($arr as $k=>$value){
	$i = 0;
	foreach($arr1 as $val){
		echo $value, ' ', $val, PHP_EOL;
		if($i++ > 2)
			break;
	}
}