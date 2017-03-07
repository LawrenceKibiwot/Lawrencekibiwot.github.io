<?php 
//1. Create a database connection.
$servername="localhost";
$dbuser="lawrence";
$dbpass="sparta";
$dbname="voters_reg";
$conn = mysqli_connect($server,$dbuser, $dbpass,$dbname);
//2. Test if connection occured.
if (!$conn) {
	die("Database connection failed:".mysqli_connect_error());
}
echo "Connection succesful";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Connecting to a database</title>
</head>
<body>

</body>
</html>