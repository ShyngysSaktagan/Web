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

// if ($result->num_rows > 0) {
//     // output data of each row
    
// } else {
//     echo "0 results";
// }
// $conn->close()labin
?>


<!DOCTYPE html>
<html><head>
	<title>Project</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="./main.css">
	<link rel="stylesheet" href="main_js.js" >
	<meta charset="UTF-8">
</head>
<body>

	<?php include 'header.php'; ?>

	<section class="body">
		<div class="container">
<!-- CArd -->
			<div class="cards">
				<!-- <?php echo $sql.count(); ?> -->
				<?php $i = 0; ?>
				<?php while($i++ != 3) {   
					$row = $result->fetch_assoc()?>
					
						<a href="<?php echo $row['href'] ?>" class="card" style="<?php echo 'background-image: url(' . $row['image'] . ')' ?>">
							<div class="card_description">
								<span class="card_tag"><?php echo $row['tag'] ?></span>
								<h3><?= $row['title']?></h3>
							</div>
						</a>
					
				<?php }?>
			</div>
<!-- ROW 1 -->
			<div class="rows">
				
				<?php while($i++ != mysqli_num_rows($result) + 1) {   
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
						<span class="heart"><img src="https://icon-library.net/images/free-heart-icon/free-heart-icon-3.jpg"></span>
						<h2><?php echo $row['title']; ?></h2>
						<p><?php echo $row['short_description']; ?></p>
					</div>
				</div>
				<?php }?>
			</div>

		<div class="button_cont" onclick="show()" id="button_cont" align="center"  >
			<a class="example_e"  rel="nofollow noopener">⬇︎</a></div>
		</div>
	</section>
<!-- BUTTON -->
	<section class="botton">
		<div class="container">
			<div class="botton_links">
				<div class="botton_link">
					<ul>
						<p class="botton_link_dis">ИНФОРМАЦИЯ</p>
						<li>
							<a href="">Реклама</a>
							<a href="">Контакты</a>
							<a href="aboutUs.html">ОПроекте</a>
						</li>
					</ul>
				</div>
				<div class="botton_link">
					<ul>
						<p class="botton_link_dis">ПОДПИСКА</p>
						<li>
							<a href="">Facebook</a>
							<a href="">Вконтакте</a>
							<a href="">Telegram</a>
						</li>
					</ul>
				</div>
				<div class="botton_link">
					<ul>
						<p class="botton_link_dis">ПРИЛОЖЕНИЯ</p>
						<li>
							<a href="">IOS</a>
							<a href="">Android</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>


	<script type="text/javascript"> 
        document.getElementById("button_cont").onclick = function() { 
  
            document.getElementById("row2").style.display = "block"; 
  
        } 
    </script> 

</body></html>
