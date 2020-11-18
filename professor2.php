<?php
	include_once 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html>

<head></head>

<body>
<?php
	
	$sql = "SELECT Section,  Grade, Number, Enrollment.CourseNo, COUNT(Grade) 
			FROM Enrollment INNER JOIN Section ON Number=Section  
			WHERE Enrollment.CourseNo = '{$_POST['CourseNo']}' AND Section = '{$_POST['Section']}' 
			GROUP BY Grade;";
	$result = mysqli_query($conn, $sql);
		
	echo"<table border='1'>";
	echo"<tr><td>Section</td><td>Grade</td><td>CourseNo</td><td>Count</td></tr>";
	while($row = mysqli_fetch_assoc($result)) {
		echo "<tr><td>{$row['Section']}</td><td>{$row['Grade']}</td><td>{$row['CourseNo']}</td><td>{$row['COUNT(Grade)']}</td></tr>";
	}
	echo"</table>";
	echo "";
	
?>
</body>
</html>