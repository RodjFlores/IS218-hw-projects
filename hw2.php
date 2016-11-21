<html>
<?php
echo "HW 2-- ARRAY FUNCTIONS";

//this is the array I will use for most
$a = array("one"=> 1,"two"=>2,"cat"=>"bad","dog"=>"good");

echo "<br><br>-----array_walk()------------<br><br>";

function f($value,$key,$p)
{
echo "$key $p $value<br>";
}
array_walk($a,"f","is");

echo "<br><br>-----array_search()------------<br><br>";

echo array_search(2,$a);

echo "<br><br>-----array_keys()------------<br><br>";

foreach(array_keys($a) as $v){
  echo $v."<br>";
  }
echo "<br><br>-----array_pop()------------<br><br>";

$a2= array_pop($a);
echo $a2." is taken out, so new array val is: <br>";
print_r($a);
  
echo "<br><br>-----array_push()------------<br><br>";  

// pushes value but not key???
array_push($a, "new pet");
print_r($a);

echo "<br><br>-----array_combine()------------<br><br>";
$r = array('o', 'k', 'n');
$s = array(15,11,14);
$t = array_combine($r, $s);

print_r($t);

echo "<br><br>-------count()----------<br><br>";

echo count($a);

echo "<br><br>-------array_intersect()----------<br><br>";

$array1 = array("cat" => "bad", "dog"=> "good");
$array2 = array("bear" => "bad", "tiger" => "awesome");
$result = array_intersect($array1, $array2);
print_r($result);

echo "<br><br>-------array_key_exists()----------<br><br>";

if(array_key_exists("dog",$a)){
  echo "dog is in the array as a key";
}
else{
echo "dog was taken out from the pop function!";
}

echo "<br><br>-------array_sums()----------<br><br>";

$sums = array(1,2,3,4,5);

echo array_sum($sums);

echo "<br><br>-------array_key_exists()----------<br><br>";

?>

</html>
