<?php
	include_once 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html>

<head></head>

<body>
<?php
	
	$sql = "SELECT   Ctitle, CLRoom, CourseNo, Cnumber, MeetDays, StartTime, EndTime 
			FROM Section INNER JOIN Course ON CourseNo=Cnumber  
			WHERE Teacher = '{$_POST['SSN']}';";
	$result = mysqli_query($conn, $sql);
		
	echo"<table border='1'>";
	echo"<tr><td>Ctitle</td><td>CLRoom</td><td>MeetDays</td><td>StartTime</td><td>EndTime</td></tr>";
	while($row = mysqli_fetch_assoc($result)) {
		echo "<tr><td>{$row['Ctitle']}</td><td>{$row['CLRoom']}</td>
			      <td>{$row['MeetDays']}</td><td>{$row['StartTime']}</td>
				  <td>{$row['EndTime']}</td></tr>";
	}
	echo"</table>";
	echo "";
	
?>
</body>
</html>