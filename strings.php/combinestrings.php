<?php
$firstname="Naveena";
$lastname="Kandasamy";
$fullname=$firstname . $lastname;
echo $fullname . PHP_EOL,"<br>";


$content= "you can do string operations easily with string functions";
$findword= "operations";
$position=false;
echo $content.PHP_EOL,"<br>";

// find number of words
echo "Number of words present in the string is:" . str_word_count($content). PHP_EOL,"<br>";

// replace strings
echo "find and replace operation with manipulations :" . str_replace("operations", "manipulations",$content). PHP_EOL,"<br>";

// reverse strings
echo strrev($content) . PHP_EOL,"<br>";

//shuffle strings
echo str_shuffle($content) . PHP_EOL;