<html>
<?php
echo "CURLS, POST AND GET<br>";

class hw12{

	function cGet($url){

		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_HEADER, 0);

		$output = curl_exec($ch);

		if($output === FALSE){
			echo "cURL error: ". curl_error($ch);
		}

		curl_close($ch);
		print_r($output);

	}

	function cPost($url){

		$data = array(1=>
			"one",2=>"two");

		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

		$output = curl_exec($ch);

		if (output ===FALSE){
			echo "curl_error($ch)";
		}

		curl_close($ch);

		print_r($output);

	}

}

$newGet = new hw12();
$newGet ->cGet("www.google.com");

$newGet ->cPost("https://web.njit.edu/~rjf26/HW/hw12post.php");


?>
</html>
