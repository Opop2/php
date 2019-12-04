#!/usr/bin/php
<?PHP
	if($argc < 2)
		exit;
	$phrase = preg_replace("/\s+/", " ", $argv[1]);
	$str = trim($phrase);
	echo ("$str\n");
?>
