<?php
	include_once 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome to our Database</title>
	<h1><center> CPSC 332 Project</center></h1>
	<center><h4>Mitchell Norseth, Abdul Qayoom Abass Zada, Brandon Tomich</h4></center>
	
	<h4>Professors</h4>
</head>

<body>

<?php
	
	$sql = "SELECT * FROM Professor;";
	$result = mysqli_query($conn, $sql);
	
	
	echo"<table border='1'>";
	echo"<tr><td>Name</td><td>Address</td><td>Phone</td><td>Title</td><td>College Degree</td></tr>";
	while($row = mysqli_fetch_assoc($result)) {
		echo "<tr><td>{$row['Name']}</td><td>Address</td><td>{$row['Phone']}</td><td>{$row['Title']}</td><td>{$row['Collegedeg']}</td></tr>";
	}
	echo"</table>";
	

	
	
?>




</body>
</html>
