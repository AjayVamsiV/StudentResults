<!-- PHP code to establish connection with the localserver -->
<?php
$sem = $_POST["Semester"];
#if(isset($_POST['submit'])){
#    $sem = $_POST['Semester'];
#}
$input = $_POST["register"];
// Username is root
$user = 'root';
$password = '';

// Database name is geeksforgeeks
$database = 'new';

// Server is localhost with
// port number 3306
$servername='localhost:3306';
$mysqli = new mysqli($servername, $user,
				$password, $database);

// Checking for connections
if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

// SQL query to select data from database
if($sem == 'all'){
    $sql = " SELECT * FROM $input";
}
else{
    $sql = " SELECT * FROM $input WHERE SEM = '" . $sem . "'";
}

$result = $mysqli->query($sql);
$mysqli->close();
?>
<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Student Details</title>
	<!-- CSS FOR STYLING THE PAGE -->
	<style>
		table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid black;
		}

		h1 {
			text-align: center;
			color: #006600;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}

		td {
			background-color: #E4F5D4;
			border: 1px solid black;
		}

		th,
		td {
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}

		td {
			font-weight: lighter;
		}
	</style>
</head>

<body>
	<section>
		<h1>RRR</h1>
		<!-- TABLE CONSTRUCTION -->
		<table>
			<tr>
				<th>Register No</th>
				<th>Subject Code</th>
				<th>Subject Name</th>
				<th>Internals</th>
                <th>Grade</th>
				<th>Credits</th>
				<th>Semester</th>
                <th>Date</th>
			</tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS -->
			<?php
				// LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<!-- FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN -->
				<td><?php echo $rows['HTNO'];?></td>
				<td><?php echo $rows['SUBCODE'];?></td>
				<td><?php echo $rows['SUBNAME'];?></td>
				<td><?php echo $rows['INTERNALS'];?></td>
                <td><?php echo $rows['GRADE'];?></td>
				<td><?php echo $rows['CREDITS'];?></td>
				<td><?php echo $rows['SEM'];?></td>
				<td><?php echo $rows['MON_YEAR'];?></td>
			</tr>
			<?php
				}
			?>
		</table>
	</section>
</body>

</html>
