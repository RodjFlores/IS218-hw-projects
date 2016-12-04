<html>
<?php
echo "HW6 PHP TIPS AND TRICKS";

echo "<br><br>-----Arbitrary Number of Arguments------------<br><br>";

function foo($a = '', $a2 = ''){
	echo "First Value: $a"."<br>";
	echo "Second Value: $a2"."<br>";
}

foo("firefwef FIRST","rgh blah blah SECOND");

echo "<br><br>-----glob() to Find Files------------<br><br>";

$files = glob("*.php", GLOB_BRACE);
print_r($files);

echo "<br><br>-----Memory Usage Info------------<br><br>";

echo "Initial: ".memory_get_usage()."bytes<br>";

$num = 2;
for($i = 1;$i <99999;$i++){
	$num=$num * $i;
}

echo "Final: ".memory_get_usage()."bytes"."<br>";

echo "<br><br>-----CPU Usage Info------------<br><br>";

print_r(getrusage());

echo "<br><br>-----Magic Constant------------<br><br>";

my_debug("first debug", __LINE__);
my_debug("second debug", __LINE__);
 
function my_debug($msg, $line) {
    echo "Line $line: $msg<br>";
}
echo "<br><br>-----Unique ID------------<br><br>";

echo uniqid()."  ---FIRST ID"."<br>";
echo uniqid()."  ---SECOND ID"."<br>";

echo "<br><br>-----Serialization------------<br><br>";

$myA = array(
	"hi",
	77,
	array(2,"two"),
	"oranges"

	);

$ser = serialize($myA);
echo $ser."<br>";
$newS = unserialize($ser);
print_r($newS);



echo "<br><br>-----Compress String------------<br><br>";

$myS = "Lorem ipsum dolor sit amet, consectetur
adipiscing elit. Nunc ut elit id mi ultricies
adipiscing. Nulla facilisi. Praesent pulvinar,
sapien vel feugiat vestibulum, nulla dui pretium orci,
non ultricies elit lacus quis ante. Lorem ipsum dolor
sit amet, consectetur adipiscing elit. Aliquam
pretium ullamcorper urna quis iaculis. Etiam ac massa
sed turpis tempor luctus. Curabitur sed nibh eu elit
mollis congue. Praesent ipsum diam, consectetur vitae
ornare a, aliquam a nunc. In id magna pellentesque
tellus posuere adipiscing. Sed non mi metus, at lacinia
augue. Sed magna nisi, ornare in mollis in, mollis
sed nunc. Etiam at justo in leo congue mollis.
Nullam in neque eget metus hendrerit scelerisque
eu non enim. Ut malesuada lacus eu nulla bibendum
id euismod urna sodales. ";

$comp = gzcompress($myS);
echo "Original size: ".strlen($myS)."<br>";
echo "Compressed size: ".strlen($comp)."<br>";
$og = gzuncompress($comp);
echo "Original size again! : ".strlen($og)."<br>";

echo "<br><br>-----Register Shutdown------------<br><br>";

$start_time = microtime(true);
 
register_shutdown_function('my_shutdown');
  
function my_shutdown() {
    global $start_time;
 
    echo "execution took: ".
            (microtime(true) - $start_time).
            " seconds.";
}



?>
</html>

