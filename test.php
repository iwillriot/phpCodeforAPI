<!DOCTYPE html>
<html>

	<head>
		<meta charset = 'utf-8'>
		<title>Welcome</title>
	</head>

	<body>
	
	<?php
$servername = "localhost";
$username = "coolcat";
$password = "toma456";
$dbname = "testy";// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
} $sql = "SELECT * FROM tab";
$result = $conn->query($sql);if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
       echo "QUOTE: " . $row["quote"]. "<br>";
   }
} else {
   echo "0 results";
}
$conn->close();
?>
	
	
	
	
	
	
	
	
	</body>

</html>