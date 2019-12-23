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
?>



<!DOCTYPE html>
<html>
<head>
    <title>ADMIN</title>
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="addPost_css.css">
    <meta charset="UTF-8">
</head>
<body>
    <section class="header">
        <div class="container">
            <div class="logo" style="cursor: none;height: ">
                <a href="#">Foodcord</a>
            </div>
        
            <ul class="section">
                <li><a href="admin.php">Dashbord</a></li>
                <li><img src="https://icon-library.net/images/icon-plus/icon-plus-10.jpg" style="width: 41px;margin-right: 0px;"><a href="#" style="color: #4eaec2">Add post</a></li>
                <li><a href="galary.php">Galary</a></li>
                <li><a href="/Users/shyngys/Desktop/Admin/111/Project.html">log out</a></li>
            </ul>
        </div>
    </section>  

    <section class="body">
        <div class="container">
            <form class="post-infos" action="insert.php" method="post">
                <div class="post-info">
                    <div class="post-name">Title</div>
                    <input type="text" name="title" placeholder="title">    
                </div>

                <div class="post-info">
                    <div class="post-name">Short-description</div>
                    <input type="text" name="short-description" placeholder="short-description">    
                </div>            

                <div class="post-info">
                    <div class="post-name">image</div>
                    <input type="text" name="image" placeholder="image href">    
                </div>            

                <div class="post-info">
                    <div class="post-name">Description</div>
                    <textarea style="border: 1px solid red; margin: 50px; font-size: 20px;" name="description" cols="70" rows="20" placeholder="description"></textarea>
                </div>            

                <div class="post-info">
                    <div class="post-name">Tags</div>
                    <select style="width: 500px;font-size: 50px;margin: 50px;border: 0px;background: white;color: red;font-weight: 300;}" class="tags" name="tag">
                        <option>health</option>
                        <option>likbez</option>
                        <option>sport</option>
                        <option>tips</option>
                    </select>
                </div>                    
                <button name="submit" value="insert" class="addButton"><img src="https://icon-library.net/images/icon-plus/icon-plus-10.jpg"></button> 
            </form>

            
        </div>
    </section>     
     

</body>
</html> 