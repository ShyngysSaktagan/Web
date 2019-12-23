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

$sql = "SELECT * FROM news where id = 1";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
// $conn->close();
?>
<!DOCTYPE html>
<html>
<head>
	<title>id1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="id_pages.css" />
	<link rel="stylesheet" type="text/css" href="shareButton.css" />
</head>
<body>
	
	<section>
		<header>
		    <div class="container">
		      <h1 class="logo">
		      	<a href="http://localhost/project/contents.html" class="show">≣</a>
		      	<a href="http://localhost/project/main.php">Foodcord</a>
		      </h1>

		      <nav>
		        <ul>
		          <li class="main"><a href="http://localhost/project/main.php">НОВОСТИ</a></li>
		          <li class="new"><a href="http://localhost/project/header/new.php">СВЕЖЕЕ</a></li>
		          <!-- <li class="best"><a href="http://localhost/project/header/best.php">ЛИЧШЕЕ</a></li> -->
		          <li><a href="http://localhost/project/searchLayOut.php"><img class="loop" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/55/Magnifying_glass_icon.svg/490px-Magnifying_glass_icon.svg.png"></a></li>
		          <li class="user"><a href="http://localhost/project/AdminPages/admin.php">User</a></li>
		        </ul>
		      </nav>
		    </div>
		</header>
	</section>

	<section class="header">
		<div class="container">
			<ul class="subheader">
				<a href="http://localhost/project/categories/health.php">ЗДОРОВЬЕ</a>
				<a href="http://localhost/project/categories/likbez.php">ЛИКБЕЗ</a>
				<a href="http://localhost/project/categories/sport.php">СПОРТ И ФИТНЕС</a>
				<a href="http://localhost/project/categories/tips.php">СОВЕТЫ</a>
			</ul>
		</div>
	</section>

	<section class="body">
		<div class="container">
			<div class="main_card">
				<h2 class="page_title"><?php echo $row['title']; ?></h2>
				<span class="heart"><img src="https://icon-library.net/images/free-heart-icon/free-heart-icon-3.jpg"></span>
				<p class="main_info"><?php echo $row['short_description']; ?></p>
				<img class="main_img" src= <?php echo $row['image']; ?> >	
				<a href="#" class="fa fa-facebook"></a>
				<a href="#" class="fa fa-twitter"></a>
				<a href="#" class="fa fa-google"></a>
			</div>
			<?php echo $row['description'];?>	
	</section>

	<section class="bottom">
		<div class="container">
			<div class="botton_links">
				<div class="botton_link">
					<ul>
						<p class="bottom_link_dis">ИНФОРМАЦИЯ</p>
						<li>
							<a href="">Реклама</a>
							<a href="">Контакты</a>
							<a href="">ОПроекте</a>
						</li>
					</ul>
				</div>
				<div class="bottom_link">
					<ul>
						<p class="bottom_link_dis">ПОДПИСКА</p>
						<li>
							<a href="">Facebook</a>
							<a href="">Вконтакте</a>
							<a href="">Telegram</a>
						</li>
					</ul>
				</div>
				<div class="bottom_link">
					<ul>
						<p class="bottom_link_dis">ПРИЛОЖЕНИЯ</p>
						<li>
							<a href="">IOS</a>
							<a href="">Android</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
</body>
</html>
	</section>
		