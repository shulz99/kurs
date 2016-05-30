<?php
$name = 'Serg';
$a = 'My name is $name';
$b = "My name is $name";

echo $a, PHP_EOL, $b, PHP_EOL;

/*
//Heredoc
$a = 10;
$b = 20;
$c = <<<EOL
	This
	multiline
	string.
	\$a = $a
	\$b = $b
EOL;

echo $c, PHP_EOL;

//Nowdoc
$c = <<<'EOL'
	This
	multiline
	string.
	\$a = $a
	\$b = $b
EOL;

echo $c, PHP_EOL;
*/