#!/usr/bin/php
<?php
    function ft_split($str)
    {
        $phrase = explode(" ", $str);
        $sort_phrase = array_values(array_filter($phrase));
        sort($sort_phrase);
        return ($sort_phrase);
    }
    if ($argc > 1)
    {
		$arr = array();
		$a = 1;
        while ($a < count($argv))
        {
            $str = trim(preg_replace("/\s+/", " ", $argv[$a]));
			$space = ft_split($str);
			$b = 0;
			while($b < count($space))
		   	{
				$word = array_push($arr, $space[$b]);
				$b++;
			}
			$a++;
        }
		sort($arr);
		$i = 0;
		while ($i < count($arr))
		{
			echo ($arr[$i]."\n");
			$i++;
		}
    }
    ?>
