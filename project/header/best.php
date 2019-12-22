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
// $conn->close();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Лучшее</title>
	<link rel="stylesheet" href="./best_css.css">
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
		          <li class="main"><a href="#">НОВОСТИ</a></li>
		          <li class="new"><a href="#">СВЕЖЕЕ</a></li>
		          <li class="best"><a style="color:white" href="best.html">ЛУЧШЕЕ</a></li>
		          <li><a href="http://localhost/project/searchLayOut.php"><img class="loop" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/55/Magnifying_glass_icon.svg/490px-Magnifying_glass_icon.svg.png"></a></li>
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

	<!-- BODY -->

	<section class="body">
		<div class="container">
		
			<h3 style="margin: 37px">Лучшее</h3>
			<table class="top-menu">
				<tbody>
					<tr>
						<td><span>За неделю</span></td> 
						<td><a href="#">За месяц</a></td>
						<td><a href="#">За год</a></td>
					</tr>
				</tbody>
			</table>
			<!-- ROW 1 -->
			<div class="row">
				<div class="row_img">
					<a href="./pages.html"><img src="https://cdn.lifehacker.ru/wp-content/uploads/2019/12/10-salatov-s-kopchyonoj-kuricej-kotorye-tochno-pridutsya-po-vkusu_1575064577-1140x570.jpg"></a>
				</div>
				<div class="row_info">
					<a href="./health.html"><span class="card_tag">здоровые</span></a>
					<div class="fa">
						<a href="#" class="fa-facebook"></a>
						<a href="#" class="fa-twitter"></a>
						<a href="#" class="fa-google"></a>	
					</div>
					
					<h2>10 салатов с копчёной курицей, которые точно придутся по вкусу</h2></a>
					<p>Интересные сочетания с сыром, ананасами, яйцами, огурцами и не только.</p>
					<div class="likes_views">
						<div class="likes">
							<span class="like"><img src="http://pngimg.com/uploads/like/like_PNG89.png"></span>
							<p>123</p>	
						</div>
						<div class="views">
							<span class="view"><img src="https://image.flaticon.com/icons/svg/44/44326.svg"></span>
							<p>123</p>	
						</div>
					</div>
					
				</div>
			</div>

<!-- row 2 -->
			<div class="row">
				<div class="row_img">
					<a href="https://www.qries.com/">
			        <img src="https://cdn.lifehacker.ru/wp-content/uploads/2018/07/skeleton_1532390010.gif">
			     	</a>
				</div>
				<div class="row_info">
					<a href="./health.html"><span class="card_tag">здоровые</span></a>
					<a href="#" class="fa fa-facebook"></a>
					<a href="#" class="fa fa-twitter"></a>
					<a href="#" class="fa fa-google"></a>
					
					<h2>10 продуктов, в которых кальция больше, чем в твороге</h2></a>
					<p>Узнайте, как определиться с приоритетами, побороть прокрастинацию и добавить порядка в творческий процесс.</p>
					<div class="likes_views">
						<div class="likes">
							<span class="like"><img src="http://pngimg.com/uploads/like/like_PNG89.png"></span>
							<p>123</p>	
						</div>
						<div class="views">
							<span class="view"><img src="https://image.flaticon.com/icons/svg/44/44326.svg"></span>
							<p>123</p>	
						</div>
					</div>
				</div>
			</div>

<!-- row 3 -->
			<div class="row">
				<div class="row_img">
					<a href=""><img src="https://cdn.lifehacker.ru/wp-content/uploads/2019/12/17-vkusnyh-sposobov-napolnit-tartaletki_1575500035-1140x570.jpg"></a>
				</div>
				<div class="row_info">
					<a href="./health.html"><span class="card_tag">здоровые</span></a>
					<a href="#" class="fa fa-facebook"></a>
					<a href="#" class="fa fa-twitter"></a>
					<a href="#" class="fa fa-google"></a>
					
					<h2>17 вкусных способов наполнить тарталетки</h2></a>
					<p>Неправильное планирование, соцсети и сомнительная конкуренция отнимают время и снижают эффективность вашего труда.</p>
					<div class="likes_views">
						<div class="likes">
							<span class="like"><img src="http://pngimg.com/uploads/like/like_PNG89.png"></span>
							<p>123</p>	
						</div>
						<div class="views">
							<span class="view"><img src="https://image.flaticon.com/icons/svg/44/44326.svg"></span>
							<p>123</p>	
						</div>
					</div>
				</div>
			</div>
		<div class="button_cont" align="center"><a class="example_e" href="#" target="_blank" rel="nofollow noopener">⬇︎</a></div>
	</section>


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

	
</body>
</html>