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
    <link rel="stylesheet" href="galary_css.css">
    <meta charset="UTF-8">
    <style >
        .body{
      width: 75%;
    float: left;
    height: 1000px;
    padding: 50px;
}

/*BODY*/
    .row {
        display: flex;
        margin-bottom: 10px;
        padding-bottom: 10px;
        border-bottom: solid 1px #dbd2d2;
     }

     .row:last-child{
      border-bottom: solid 1px #dbd2d2;  
     }

      .row img{
        transition: filter 1s;
      }

      .row:hover h2{
        color: #ffa500;
      }

      .row_img img {
          width: 400px;
          height: 200px;
      }

      .row_img img:hover {
        filter: brightness(70%);
      }

      .row_info {
        margin-left: 15px;
      }

    
      .row_info p {
        font-size: 13px;
        display: contents;
        color: #a2a1a1;
      }
      

    .row_info h2 {
      font-size: 21px;
    }

    hr {
        margin: 0;
        border-style: solid;
        border-width: 1;
    }

    .fa:hover {
    opacity: 0.7;
}

    /*TAG*/
    .row_info a {
      font-size: 15px;
      font-weight: normal;
      color: #a2a1a1;
      text-decoration: none;  
    }

    .row_info .card_tag:hover {
      background: #a2a1a1;
      color: white;
      border: 1px solid #a2a1a1;
    }

    .row_info .card_tag {
      border-radius: 3px;
      padding: 2px 5px 4px 5px;
      border: 1px solid #a2a1a1;
    }

    /*HEART*/

    #delete, #edit {
        position: relative;
        
        left: 656px;
    }

    #delete{
        top: 50px;
    }

    #delete img , #edit img {
      width: 30px;
    opacity: 0.34;
    transition: opacity 0.5s;
    }

    #delete img:hover, #edit img:hover{
        opacity: 0.8;
    }
    </style>
</head>
<body>
    <section class="header">
        <div class="container">
            <div class="logo">
                <a href="#">Foodcord</a>
            </div>
        
            <ul class="section">
                <li><a href="admin.php">Dashbord</a></li>
                <li><a href="addPost.php">Add post</a></li>
                <li><img src="https://lh3.googleusercontent.com/1_JbWrdiUY7E6_YDKQ7ko7IBt4AHVYW7EFSt29W9Kig6zWoO6qXFrc0tTaypUAsoqrM"><a href="#" style="color: orange">Galary</a></li>
                <li><a href="/Users/shyngys/Desktop/Admin/111/Project.html" >log out</a></li>
            </ul>
        </div>
    </section>  

    <section class="body">
        <div class="container">
            <div class="rows">
                <?php $i = 0 ?>
                <?php while($i++ != mysqli_num_rows($result)) {   
                    $row = $result->fetch_assoc()?>
                    <div class="row">
                    <div class="row_img">
                        <a href=<?php echo $row['href']; ?>><img src=<?php echo $row['image']; ?>></a>
                    </div>
                    <div class="row_info">
                        <a href=<?php echo $row['tag_href']; ?>><span class="card_tag"><?php echo $row['tag']; ?></span></a>
                        <div class="fa">
                            <a href="#" class="fa-facebook"></a>
                            <a href="#" class="fa-twitter"></a>
                            <a href="#" class="fa-google"></a>  
                        </div>
                        <?php echo '<span id="delete"><a href=delete.php?id='.$row['id'].'><img src="https://png.pngtree.com/svg/20170712/delete_recycle_bin_trash_4956.png"></a></span> ' ?>
                        <span id="edit"><a href="http://localhost/project/AdminPages/addPost.php"><img src="https://icon-library.net/images/edit-icon-free/edit-icon-free-4.jpg"></a></span>
                        <h2><?php echo $row['title']; ?></h2>
                        <p><?php echo $row['short_description']; ?></p>
                    </div>
                </div>
                <?php }?>
                
            </div>
        </div>
    </section>     
     

</body>
</html> 