<?php

class file{

	function open($url){

		$myfile = fopen($url, "r") or die("File does not exist!!");

		while(!feof($myfile)) 
		{
  			echo fgets($myfile) . "<br>";
		}
		fclose($myfile);


	}
}



?>
