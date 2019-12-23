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
	
		<?php include 'header.php'; ?>


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
		