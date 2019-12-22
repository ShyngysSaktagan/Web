
<?php
    $servername = "localhost";
$username = "root";
$password = "";
$dbname = "db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "DELETE FROM news WHERE id='$_GET[id]'";

if (mysqli_query($conn,$sql)) {
	header("refresh:1; url=galary.php");
}else{
	echo "Not deleted";
}

?>