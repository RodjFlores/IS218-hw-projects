<html>
<p>
<?php
echo "PROJECT 2 MAIN <br><br>";

echo "**each line is a new object/class**<br><br>";

require_once("p2load.php");

#USES THE SAME CLASS NAME AS FILE NAME

#arr.php
$p = array(
	array("Rod","NJIT",23),
	array("Jason","RU",19),
	array("Russ","OHS",16),
	array("Jake","OHS",15)
	);

$a = new arr;
$a -> makeTable($p);

echo "<br>";
echo "<br>";

#test.php
$n = new test;
$n->out();


echo "<br>";
#word.php
$w = new word;
$w ->prefix("teststring");
$w ->suffix("teststring2");

echo "<br>";
#calc.php
$c = new calc;
$c -> inc(10);

echo "<br>";
#curl.php
$newGet = new curl();
$newGet ->cGet("https://web.njit.edu/~rjf26/HW/story.txt");
$newGet ->cGet("www.fakewebsitedoesnotexisthaha.com");

echo "<br>";
#file.php
$f = new file;
$f -> open("https://web.njit.edu/~rjf26/HW/file.txt");
$f -> open("non existent file .txt");

?>
</p>
</html>