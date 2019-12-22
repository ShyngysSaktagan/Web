
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


$sql = "SELECT * FROM news";
$result = $conn->query($sql);
$id = mysqli_num_rows($result) + 1;
echo $id;

$title = $_POST['title'];
$short_description = $_POST['short-description'];
$description = $_POST['description'];
$tag = $_POST['tag'];

echo $tag;



$sql2 = "INSERT INTO news (`id`, `title`, `description`, `tag`, `short_description`, `href`, `teg_href`, `like`) VALUES ($id, $title, $description, $tag, $short_description, 'http://localhost/project/id_page/id' . $id . '.php', 'http://localhost/project/categories/'.$tag.'.php')";
mysqli_query($conn, $sql2);

header('Location: /addPost.php?signup=success');