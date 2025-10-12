<!-- string  "hello","123,","php is fun"... 
 
-->

<?php
$name = "nirmala";
echo "length".strlen($name);
echo "reverse: ".strrev($name);

echo "uppercase:  ".strtoupper($name);
echo "Lowercase: ".strtolower($name);
echo "First character upper: ".ucfirst($name);
echo "First char lower: ".lcfirst($name);
echo "<br>";
echo "capitalize each word: ".ucwords($name);

echo str_replace("mala","lala",$name);
echo "<br>";


$text = "      hello world  ";
echo strpos($text,"world");
echo trim($text);





