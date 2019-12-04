#!/usr/bin/env php
<?php
    function ft_split($str)
    {
        $phrase = explode(" ", $str);
        $sort_phrase = array_values(array_filter($phrase));
        sort($sort_phrase);
        return ($sort_phrase);
	}
?>
