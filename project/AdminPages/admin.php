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


?>


<!DOCTYPE html>
<html>
<head>
    <title>ADMIN</title>
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="admin_css.css">
    <meta charset="UTF-8">    
    <style>

    </style>
</head>
<body>
    <section class="header">
        <div class="container">
            <div class="logo">
                <a href="#">Foodcord</a>
            </div>
        
            <ul class="section">
                <li><img src="https://cdn0.iconfinder.com/data/icons/small-n-flat/24/678085-house-512.png"><a href="#" style="color: #bdc3c7">Dashbord</a></li>
                <li><a href="addPost.php">Add post</a></li>
                <li><a href="galary.php">Galary</a></li>
                <li  onclick="show()"><a id="logout" href="/Users/shyngys/Desktop/Admin/111/Project.html">log out</a></li>
                <div id="exits">
                    <button class="exit"><a href="Project.html">Exit</a></button>
                    <button class="exit">Cancel</button>    
                </div>
                
            </ul>   
        </div>
    </section>  
    
    <section class="body">
        <div class="container">
            <div class="cards">

                <p>Likes</p>

                <div class="card">
                    <div class="card-text">Total Likes</div>
                    <div class="card-info">123</div>
                </div>

                <div class="card">
                    <div class="card-text">Mouth Likes</div>
                    <div class="card-info">123.543</div>
                </div>
                    
                <div class="card">
                    <div class="card-text">Week Likes</div>
                    <div class="card-info">123.543</div>
                </div>    

                <p>. . .</p>

                  <div class="card">
                    <div class="card-text">Users</div>
                    <div class="card-info">12.213</div>
                </div>

                <div class="card">
                    <div class="card-text">Posts</div>
                    <div class="card-info">123.543</div>
                </div>
                    
                <!-- <div class="card">
                    <div class="card-text"></div>
                    <div class="card-info">123.543</div>
                </div>   -->

            </div>
        </div>
    </section>     

   <!--  <script>
      function show() {
        document.getElementById("exits").style.visibility = "none";
        document.getElementById("logout").style.visibility = "none";
      }
    </script> -->

</body>
</html> 