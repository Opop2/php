#!/usr/bin/php
<?PHP
	print "Enter a number: ";
	while($input= fgets(STDIN))
	{
		$b = trim($input);
		$a = filter_var($input, FILTER_VALIDATE_INT, FILTER_NULL_ON_FAILURE);
		if(!(is_int($a)))
			print "'$b' is not a number\n";
		else if ($a % 2 != 0)
			print "The number $a is odd\n";
		else if ($a % 2 == 0)
			print "The number $a is even\n";
		 print "Enter a number: ";
	}
?>

