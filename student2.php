<?php
	include_once 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html>

<head></head>

<body>
<?php
	
	$sql =  "SELECT SNO, CourseNo, Ctitle, Grade FROM Enrollment 
			INNER JOIN Course ON CourseNo=CNumber  
			WHERE SNO = '{$_POST['SNO']}';";

	$result = mysqli_query($conn, $sql);
		
	echo"<table border='1'>";
	echo"<tr><td>CourseNo</td><td>Ctitle</td><td>Grade</td></tr>";
	while($row = mysqli_fetch_assoc($result)) {
		echo "<tr><td>{$row['CourseNo']}</td><td>{$row['Ctitle']}</td>
			      <td>{$row['Grade']}</td></tr>";
	}
	echo"</table>";
	echo "";
	
?>
</body>
</html>