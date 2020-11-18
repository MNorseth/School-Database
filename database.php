<?php
	include_once 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html>

<head></head>

<body>
<h4>Department</h4>
<?php
	
	$sql = "SELECT * FROM Department;";
	$result = mysqli_query($conn, $sql);
	
	
	echo"<table border='1'>";
	echo"<tr><td>DNumber</td><td>DName</td><td>DPhone</td><td>DLocation</td><td>ChrPerson</td></tr>";
	while($row = mysqli_fetch_assoc($result)) {
		echo "<tr><td>{$row['DNumber']}</td><td>{$row['DName']}</td><td>{$row['DPhone']}</td>
				  <td>{$row['DLocation']}</td><td>{$row['ChrPerson']}</td></tr>";
	}
	echo"</table>";
	echo "";
?>

<h4>Professor</h4>
<?php
	
	$sql = "SELECT * FROM Professor;";
	$result = mysqli_query($conn, $sql);
	
	
	echo"<table border='1'>";
	echo"<tr><td>SSN</td><td>Name</td><td>Address</td><td>Phone</td><td>Sex</td>
			 <td>Title</td><td>Salary</td><td>College Degree</td></tr>";
	while($row = mysqli_fetch_assoc($result)) {
		echo "<tr><td>{$row['SSN']}</td><td>{$row['Name']}</td><td>{$row['Address']}</td><td>{$row['Phone']}</td>
									<td>{$row['Sex']}</td><td>{$row['Title']}</td><td>{$row['Salary']}</td>
									<td>{$row['Collegedeg']}</td></tr>";
	}
	echo"</table>";
	echo "";
?>


<h4>Student</h4>
<?php
	
	$sql = "SELECT * FROM Student;";
	$result = mysqli_query($conn, $sql);
	
	
	echo"<table border='1'>";
	echo"<tr><td>CWID</td><td>Name</td><td>Address</td><td>Phone</td><td>Major</td></tr>";
	while($row = mysqli_fetch_assoc($result)) {
		echo "<tr><td>{$row['CWID']}</td><td>{$row['Name']}</td><td>{$row['Address']}</td>
				  <td>{$row['Phone']}</td><td>{$row['Major']}</td></tr>";
	}
	echo"</table>";
	echo "";
?>

<h4>Course</h4>
<?php
	
	$sql = "SELECT * FROM Course;";
	$result = mysqli_query($conn, $sql);
	
	
	echo"<table border='1'>";
	echo"<tr><td>Cnumber</td><td>Ctitle</td><td>Book</td><td>Units</td><td>PreReq</td></tr>";
	while($row = mysqli_fetch_assoc($result)) {
		echo "<tr><td>{$row['Cnumber']}</td><td>{$row['Ctitle']}</td><td>{$row['Book']}</td><td>{$row['Units']}</td><td>{$row['PreReq']}</td></tr>";
	}
	echo"</table>";
	echo "";
?>

<h4>Section</h4>
<?php
	
	$sql = "SELECT * FROM Section;";
	$result = mysqli_query($conn, $sql);
	
	
	echo"<table border='1'>";
	echo"<tr><td>Number</td><td>CourseNo</td><td>CLRoom</td><td>MeetDays</td><td>StartTime</td><td>EndTime</td><td>NumOfSeat</td><td>Teacher</td></tr>";
	while($row = mysqli_fetch_assoc($result)) {
		echo "<tr><td>{$row['Number']}</td><td>{$row['CourseNo']}</td><td>{$row['CLRoom']}</td><td>{$row['MeetDays']}</td><td>{$row['StartTime']}</td><td>{$row['EndTime']}</td><td>{$row['NumOfSeat']}</td><td>{$row['Teacher']}</td></tr>";
	}
	echo"</table>";
	echo "";
?>

<h4>Prerequisite</h4>
<?php
	
	$sql = "SELECT * FROM Prerequisite;";
	$result = mysqli_query($conn, $sql);
	
	
	echo"<table border='1'>";
	echo"<tr><td>CourseNum</td><td>Prereq</td></tr>";
	while($row = mysqli_fetch_assoc($result)) {
		echo "<tr><td>{$row['CourseNum']}</td><td>{$row['Prereq']}</td></tr>";
	}
	echo"</table>";
	echo "";
?>



<h4>Enrollment Record</h4>
<?php
	
	$sql = "SELECT * FROM Enrollment;";
	$result = mysqli_query($conn, $sql);
	
	
	echo"<table border='1'>";
	echo"<tr><td>SNO</td><td>CourseNo</td><td>Section</td><td>Grade</td></tr>";
	while($row = mysqli_fetch_assoc($result)) {
		echo "<tr><td>{$row['SNO']}</td><td>{$row['CourseNo']}</td><td>{$row['Section']}</td><td>{$row['Grade']}</td></tr>";
	}
	echo"</table>";
	echo "";
?>

<h4>College Degree</h4>
<?php
	
	$sql = "SELECT * FROM CollegeDegree;";
	$result = mysqli_query($conn, $sql);
	
	
	echo"<table border='1'>";
	echo"<tr><td>Professor</td><td>CollegeDeg</td></tr>";
	while($row = mysqli_fetch_assoc($result)) {
		echo "<tr><td>{$row['Professor']}</td><td>{$row['CollegeDeg']}</td></tr>";
	}
	echo"</table>";
	echo "";
?>

<h4>Minor</h4>
<?php
	
	$sql = "SELECT * FROM Minor;";
	$result = mysqli_query($conn, $sql);
	
	
	echo"<table border='1'>";
	echo"<tr><td>SNO</td><td>DepNum</td></tr>";
	while($row = mysqli_fetch_assoc($result)) {
		echo "<tr><td>{$row['SNO']}</td><td>{$row['DepNum']}</td></tr>";
	}
	echo"</table>";
	echo "";
	
	mysqli_close($conn);
?>



</body>
</html>
