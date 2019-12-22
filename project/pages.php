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
	<title>bonus-page1</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="bonus_pages.css" />
	<link rel="stylesheet" type="text/css" href="shareButton.css" />
</head>
<body>
	
	<section>
		<header>
		    <div class="container">
		      <h1 class="logo">
		      	<a href="contents.html" class="show">≣</a>
		      	<a href="Project.html">Foodcord</a>
		      </h1>

		      <nav>
		        <ul>
		          <li class="main"><a href="#" style="color:white">НОВОСТИ</a></li>
		          <li class="new"><a href="new.html">СВЕЖЕЕ</a></li>
		          <li class="best"><a href="best.html">ЛИЧШЕЕ</a></li>
		          <li><a href="#"><img class="loop" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/55/Magnifying_glass_icon.svg/490px-Magnifying_glass_icon.svg.png"></a></li>
		          <li class="user"><a href="/Users/shyngys/Desktop/Admin/111/AdminPages/admin.html">User</a></li>
		        </ul>
		      </nav>
		    </div>
		</header>
	</section>

	<section class="header">
		<div class="container">
			<ul class="subheader">
				<a href="./health.html">ЗДОРОВЬЕ</a>
				<a href="likbez.html">ЛИКБЕЗ</a>
				<a href="sport.html">СПОРТ И ФИТНЕС</a>
				<a href="tips.html">СОВЕТЫ</a>
			</ul>
		</div>
	</section>

	<section class="body">
		<div class="container">
			<div class="main_card">
				<h2 class="page_title"><?php echo $row['title']; ?></h2>
				<span class="heart"><img src="https://icon-library.net/images/free-heart-icon/free-heart-icon-3.jpg"></span>
				<p class="main_info"><?php echo $row['short_description']; ?></p>


				<img class="main_img" src="https://cdn.lifehacker.ru/wp-content/uploads/2019/12/10-salatov-s-kopchyonoj-kuricej-kotorye-tochno-pridutsya-po-vkusu_1575064577-1140x570.jpg">	
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
		