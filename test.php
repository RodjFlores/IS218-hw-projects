<?php
$myfile = fopen("https://web.njit.edu/~rjf26/HW/file.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}
fclose($myfile);
?>