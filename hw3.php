<html>
<?php
echo "HW3 ARRAY TO TABLE";

$p = array(
	array("Rod","NJIT",23),
	array("Jason","RU",19),
	array("Russ","OHS",16),
	array("Jake","OHS",15)
	);
?>
<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>School</th>
			<th>Age</th>
		</tr>
	</thead>
	<tbody>
		
			<?php
			foreach ($p as $arr) {
				echo "<tr></tr>";
				foreach ($arr as $data) {
					echo "<td>".$data."</td>";
				}
			}
			?>
		
	</tbody>
</table>



</html>