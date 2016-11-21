<html>
<?php
	echo "HW4 CSV TO TABLE";

	$csv = array_map("str_getcsv", file('vals.csv'));
	echo "<br>";
	
	#THIS IS THE CSV FILE CONTENTS LOCATED IN THE SAME DIRECTORY
	#Rod,5'4,135
	#Jas,5'8,150
	#Rus,5'7,130
	#Jak,5'6,155
?>



<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>Height</th>
			<th>Weight</th>
		</tr>
	</thead>
	<tbody>
		
			<?php
			foreach ($csv as $arr) {
				echo "<tr></tr>";
				foreach ($arr as $data) {
					echo "<td>".$data."</td>";
				}
			}
			?>
		
	</tbody>
</table>


</html>

