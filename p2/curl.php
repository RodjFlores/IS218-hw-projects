<?php

class curl{

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
		echo "<br>";

	}
}



?>