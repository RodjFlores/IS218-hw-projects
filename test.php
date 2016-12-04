<html>
<?php

header('Content-Type: application/excel');
header('Content-Disposition: attachment; filename="sample.csv"');
$data = array(
        		"Rod,Jas,Rus,Jak",
        		"one,two,three,four",
        		"USA, PHILIPPINES"
				);

$fp = fopen('php://output', 'w');
foreach ( $data as $line ) {
    $val = explode(",", $line);
    fputcsv($fp, $val);
}
fclose($fp);
?>
</html>
