<?php
    $servername = "localhost";
$username = "root";
$password = "";
$dbname = "db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


// $sql = "SELECT * FROM news";
// $result = $conn->query($sql);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



if (isset($_GET['keywords'])) {
	// echo $_GET['keywords'];

	$keywords = $conn->escape_string($_GET['keywords']);

	$query = $conn->query("
		SELECT *
		FROM news
		WHERE title LIKE '%{$keywords}%'
	");
	// echo $query->num_rows;
	// $row = $query->fetch_object();
	// echo $row['title'];

}

	?>




	<link rel="stylesheet" href="./main.css">

	<section>
		<header>
		    <div class="container">
		      <h1 class="logo">
		      	<a href="contents.html" class="show">≣</a>
		      	<a href="#">Foodcord</a>
		      </h1>

		      <nav>
		        <ul>
		          <li class="main"><a href="http://localhost/project/main.php">НОВОСТИ</a></li>
		          <li class="new"><a href="http://localhost/project/header/new.php">СВЕЖЕЕ</a></li>
		          <li class="best"><a href="best.html">ЛУЧШЕЕ</a></li>
		          <!-- form -->
		          <li><a href="http://localhost/project/searchLayOut.php"><img  class="loop" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/55/Magnifying_glass_icon.svg/490px-Magnifying_glass_icon.svg.png"></a></li>
		          <li class="user"><a href="/Users/shyngys/Desktop/Admin/111/AdminPages/admin.html">User</a></li>
		        </ul>
		      </nav>
		    </div>
		</header>
	</section>

	<section class="header">
		<div class="container">
			<ul class="subheader">
				<a href="http://localhost/project/categories/health.php">ЗДОРОВЬЕ</a				<a href="http://localhost/project/categories/likbez.php">ЛИКБЕЗ</a>
				<a href="http://localhost/project/categories/sport.php">СПОРТ И ФИТНЕС</a>
				<a href="http://localhost/project/categories/tips.php">СОВЕТЫ</a>
			</ul>
		</div>
	</section>

	<div class="container" style="margin-top: 10px;"> 
			<div class="rows">
				
				<?php if ($query->num_rows){ ?>
					
				
				
				<?php while($row = $query->fetch_assoc() ) { ?>
					<div class="row">
					<div class="row_img">
						<a href="<?php echo $row['href']; ?>">
							<img src="<?php echo $row['image']; ?>">
						</a>
					</div>
					<div class="row_info">
						<a href="<?php echo $row['tag_href']; ?>"><span class="card_tag"><?php echo $row['tag']; ?></span></a>
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
				<?php }}?>			
			</div>
	</div>

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

