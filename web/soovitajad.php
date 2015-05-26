<html>

<?php require("header.php"); ?> 
<?php require("sidebar.php"); ?>

<div id = "sisu">

	<?php

	$servername = "localhost";
	$username   = "root";
	$password   = "AnirmatekLCD4";
	$db         = "Soovitusleht";

	$conn = new mysqli($servername, $username, $password, $db);
	if ($conn->connect_error){die("Connection failed: " . $conn->connect_error);} 

	$sql = "SELECT * FROM `Soovitajad`;"; 
	$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr> <td><b>ID</b></td> <td><b>Eesnimi</b></td> <td><b>Perenimi</b></b></td> </tr>";
    while($row = $result->fetch_assoc()) {
    	echo "<tr>";
		echo "<td><b>" . $row['ID'] . "</b></td>";
  		echo "<td>" . $row['Eesnimi'] . "</td>";
  		echo "<td>" . $row['Perekonnanimi'] . "</td>";
    	echo "</tr>";
	}
	echo "</table>";
	} else {echo "Andmebaasist vasteid ei leitud.";}

	mysqli_free_result($result);
	mysqli_close($conn);

	?>

</div>

<?php require("fin.php"); ?>     

</html>
