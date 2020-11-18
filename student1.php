<?php
	include_once 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html>

<head></head>

<body>
<?php
	
	$sql =  "SELECT Number, Section.CourseNo, CLRoom, MeetDays, StartTime, EndTime, COUNT(Section) 
	FROM Section INNER JOIN Enrollment ON Number=Section AND Section.CourseNo=Enrollment.CourseNo  
	WHERE Section.CourseNo = '{$_POST['CourseNo']}' GROUP BY Section;";

	$result = mysqli_query($conn, $sql);
		
	echo"<table border='1'>";
	echo"<tr><td>SectionNum</td><td>CourseNo</td><td>CLRoom</td><td>MeetDays</td><td>StartTime</td><td>EndTime</td><td>NumEnrolled</td></tr>";
	while($row = mysqli_fetch_assoc($result)) {
		echo "<tr><td>{$row['Number']}</td><td>{$row['CourseNo']}</td><td>{$row['CLRoom']}</td><td>{$row['MeetDays']}</td><td>{$row['StartTime']}</td><td>{$row['EndTime']}</td><td>{$row['COUNT(Section)']}</td></tr>";
	}
	echo"</table>";
	echo "";
	
?>
</body>
</html>