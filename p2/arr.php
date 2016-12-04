<?php

class arr{

	function makeTable($myArray){

		echo "<table>";
			echo "<thead>";
				echo "<tr>";
					echo "<th>Name</th>";
					echo "<th>School</th>";
					echo "<th>Age</th>";
				echo "</tr>";
			echo "</thead>";
			echo "<tbody>";
		
				foreach ($myArray as $arr2) {
					echo "<tr></tr>";
					foreach ($arr2 as $data) {
						echo "<td>".$data."</td>";
					}
				}
			echo "</tbody>";
		echo "</table>";
	}
}

?>