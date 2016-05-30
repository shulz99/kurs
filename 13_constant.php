<?php
namespace my\examle;
error_reporting (E_ALL);

define('test', 'test constant');

echo test, TEST, PHP_EOL;

/*
define ('case_sen', 'This const case_sen', true);

echo case_sen, ' ', CASE_SEN, PHP_EOL;

echo '__LINE__ = ', __LINE__, PHP_EOL;
echo '__FILE__ = ', __FILE__, PHP_EOL;
echo '__DIR__ = ', __DIR__, PHP_EOL;

function test(){
	echo '__FUNCTION__ = ', __FUNCTION__, PHP_EOL;
}

echo test();
echo '__NAMESPACE__ = ', __NAMESPACE__, PHP_EOL;
*/