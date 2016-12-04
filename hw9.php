<html>

<?php

class csvfile{
	


	function save(){		
		
        header('Content-Type: application/excel');
		header('Content-Disposition: attachment; filename="hw9.csv"');
		$data = array(
        		"Rod,Jas,Rus,Jak",
        		"one,two,three,four",
        		"USA, PHILIPPINES"
				);

		$fp = fopen('php://output', 'w');
		foreach ( $data as $line ) 
		{
    	$val = explode(",", $line);
   		fputcsv($fp, $val);

		}

		fclose($fp);

		
		

	}
}

$csv = new csvfile;
$csv -> save();



?>
</html>