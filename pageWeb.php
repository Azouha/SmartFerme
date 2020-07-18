<!DOCTYPE html> 
<html> 
<head> 
	<title>Irrigation data</title> 
	<link rel="stylesheet" type="text/css" href="file.css" />
</head>
<body>
	<header> 
		<div class="b">Dienvenue a la ferme de CSEIR</div>
	</header>
	<table class="tableau">
		<tr>
			<th>ID</th>
			<th>Time</th>
			<th>Humidité du sol</th>
			<th>Niveau du réservoir</th>
			<th>Pluie</th>
		</tr>
		<?php
		    $conn = mysqli_connect("locelhost","pi","gseir4","Detaferme") or die ("non connected"); 
		    $sql = "SELECT * FROM FERMEIABLE"; 
		$result = $conn->query($sql); 
		if ($result->num_rows >0){
			while($row=$result->fetch_assoc(){
				echo "<tr><td>" . $row["ID"] . "</td><td>" . $row["Time"] . "</td><td>".
				     $row["HUMIDITE"] . "</td><td>" . $row["NIVEAU"] . "</td><td>" . $row["PLUIT"]
				      . "</td></tr>";
				}
				echo "</table>";
			} 
		else {echo "0 results";}
		$conn->cmose();
		?>
    </table>
</body>
</html>