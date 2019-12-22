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

if (isset($_GET(['keywords'])) {
	$keywords = $db->escape_string($_GET['keywords']);

	$query = $db->query("
		SELECT title, description
		FROM news
		WHERE title LIKE '%{$keywords}%'
		OR description LIKE '%{$keywords}%'
		");
?>

	<div class="result-count">
	Found <?php echo $query->num_rows; ?> results.


	<?php
}

