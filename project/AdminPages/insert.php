
<?php
    $servername = "localhost";
$username = "root";
$password = "";
$dbname = "db";

// Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn === false) {
    die("Connection failed: " . mysqli_connect_error());
}

$s = 'SELECT * FROM news';
$result = $conn->query($s);
$id = 1;

for ($i=0; $i < mysqli_num_rows($result); $i++) { 
	$row = $result->fetch_assoc();
	if ($i != $row['id']){
		$id = $i;
		break;
	}else{
		$id = $i+1;
	}
}

// echo $id;

$title = mysqli_real_escape_string($conn, $_REQUEST['title']);
$short_description = mysqli_real_escape_string($conn, $_REQUEST['short-description']);
$description = mysqli_real_escape_string($conn, $_REQUEST['description']);
$tag = mysqli_real_escape_string($conn, $_REQUEST['tag']);
$href = 'http://localhost/project/id_page/id' . $id . '.php';
$tag_href = 'http://localhost/project/categories/'.$tag.'.php';
$image = mysqli_real_escape_string($conn, $_REQUEST['image']);


$sql = "INSERT INTO news (id,title, short_description, description, tag, tag_href, image, href) VALUES ('$id','$title', '$short_description', '$description', '$tag', '$tag_href', '$image', '$href')";

if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

header("refresh:2; url=addPost.php");
// mysqli_close($link); 
?>


