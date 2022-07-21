<?php

$name= "Hemanth is a good boy!";
echo $name;
echo "<br>";

echo "The lenght of my string is" . strlen($name);
echo "<br>";
echo str_word_count($name);
echo "<br>";
echo strrev($name);
echo "<br>";
echo strpos($name, "is");
echo "<br>";
echo str_replace("Hemanth", "Karthik", $name);
echo "<br>";
echo str_repeat($name,20);
echo "<br>";


$str1 = "Hello text   
multiple line  
text within double quoted string";
$str2 = "Using double \"quote\" with backslash inside double quoted string";
$str3 = "Using escape sequences \n in double quoted string";
echo "$str1 <br/> $str2 <br/> $str3";

?>

