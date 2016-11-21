<html>
<?php
echo "HW 1 - String Functions"."<br><br>";


echo "<br>----addslashes()----------------<br>";

$str = "This is a test string called \$str.<br>This is her's.<br> She said, 'Hello! WORLD!";
echo $str;
echo addslashes($str);


echo "<br>-----chr()---------------------<br><br>"; 

$v = ord($str);
echo " First char of \$str is ".chr($v)."<br>";

echo "<br>-----chunk_split()---------------------<br><br>";

$s= (strlen($str))/6;
$chunked = chunk_split($str,$s,"--");
echo $chunked;

echo "<br><br>-------count_chars()----------<br><br>";

$c = count_chars($str, 3);
echo $c;

echo "<br><br>-----echo---------------------<br><br>";

echo "This"."Is"."Echo"."Using"."Concatanations"."No"."Space";

echo "<br><br>-----explode()---------------------<br><br>";

$piece = explode("e", $str);
echo "This is \$str, exploded, no char e.<br>";
echo $piece[0].$piece[2].$piece[4];

echo "<br><br>-----htmlentities()---------------------<br><br>";

echo "REVEAL THE HTML CODE! <br>";
echo htmlentities($str);

echo "<br><br>-----htmlspecialchars_decode()---------------------<br><br>";

echo htmlentities("<p>this -&gt; &quot;</p>\n")."THIS CODE WILL BE HIDDEN";

echo htmlspecialchars_decode("<p>this -&gt; &quot;</p>\n");

echo "<br><br>-----implode()---------------------<br><br>";

//will use $piece from the explode
$glue = implode("--",$piece);
echo $glue;

echo "<br><br>---------md5-----------------<br><br>";

echo md5($str);

echo "<br><br>-----str_getcsv()---------------------<br><br>";

$arr = str_getcsv($str, "e");
foreach($arr as $key => $val){
  echo $val;
}
echo "<br><br>----strip_tags()---------------------<br><br>";

echo "No more breaklines.<br>";
echo strip_tags($str);

echo "<br><br>-----stripos()---------------------<br><br>";

$pos = stripos($str,"her");

echo $pos." is the start of HER";

echo "<br><br>-----strlen()---------------------<br><br>";

echo "Length of \$str is ". strlen($str);

echo "<br><br>-------rtrim()----------<br><br>";

echo rtrim($str,"WORLD!");




?>


</html>