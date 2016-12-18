<?php


$DB_host = "sql2.njit.edu";
$DB_user = "rjf26";
$DB_pass = "chamber73";
$DB_name = "rjf26";

try
{
     $DB_con = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
     $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

     $data = $DB_con->query('SELECT user_name FROM users');

     echo "Data from my sql table.<br><br>";
	 foreach ($data as $key) {
	 	foreach ($key as $value)
	 	 {
	 		echo $value."<br>";
	 	}
	 	# code...
	 }
}
catch(PDOException $e)
{
     echo $e->getMessage();
}

?>