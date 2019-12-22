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
// if ($result->num_rows > 0) {
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//         echo "id: " . $row["id"]. " - Name: " . $row["title"]. " " . "<br>";
//     }
// } else {
//     echo "0 results";
// }
// $conn->close();
?>


<!DOCTYPE html>
<html><head>
	<title>Project</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="./main.css">
	<link rel="stylesheet" href="main_js.js" >
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
		          <li class="best"><a href="best.html">ЛУЧШЕЕ</a></li>
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
<!-- CArd -->
			<div class="cards">
				<div class="card" style="<?php echo 'background-image: url(' . $row['image'] . ')' ?>">
					<div class="card_description">
						<a href="./health.html"><span class="card_tag"><?php echo $row['tag'] ?></span></a>
						<h3>Спортивное питание до и после тренировки</h3>
					</div>
				</div>
				<div class="card" style="background-image: url(https://cdn.lifehacker.ru/wp-content/uploads/2019/12/5-sposobov-prigotovit-salat-Granatovyj-braslet-ot-klassiki-k-eksperimentam_1575408909-800x400.jpg)">
					<div class="card_description">
						<a href="likbez.html"><span class="card_tag">ликбез</span></a>
						<h5>5 способов приготовить салат «Гранатовый браслет»: от классики к экспериментам</h5>
					</div>
				</div>
				<div class="card" style="background-image: url(https://cdn.lifehacker.ru/wp-content/uploads/2019/12/10-appetitnyh-myasnyh-ruletov-kotorye-ponravyatsya-vsej-seme_1575322043-800x400.jpg)">
					<div class="card_description">
						<a href="likbez.html"><span class="card_tag">ликбез</span></a>
						<h5>10 аппетитных мясных рулетов, которые понравятся всей семье</h5>
					</div>
				</div>
			</div>

<!-- ROW 1 -->
			<div class="rows">
				<div id="row1">
					<div class="row">
						<div class="row_img">
							<a href="./pages.php"><img src="https://cdn.lifehacker.ru/wp-content/uploads/2019/12/10-salatov-s-kopchyonoj-kuricej-kotorye-tochno-pridutsya-po-vkusu_1575064577-1140x570.jpg"></a>
						</div>
						<div class="row_info">
							<a href="./health.html"><span class="card_tag">здоровые</span></a>
							<div class="fa">
								<a href="#" class="fa-facebook"></a>
								<a href="#" class="fa-twitter"></a>
								<a href="#" class="fa-google"></a>	
							</div>
							<span class="heart"><img src="https://icon-library.net/images/free-heart-icon/free-heart-icon-3.jpg"></span>
							<h2>10 салатов с копчёной курицей, которые точно придутся по вкусу</h2>
							<p>Интересные сочетания с сыром, ананасами, яйцами, огурцами и не только.</p>
							<!-- <div class="likes_views">
								<div class="likes">
									<span class="like"><img src="https://icon-library.net/images/free-heart-icon/free-heart-icon-3.jpg"></span>
									<p>123</p>	
								</div> -->
								<!-- <div class="views">
									<span class="view"><img src="https://image.flaticon.com/icons/svg/44/44326.svg"></span>
									<p>123</p>	
								</div> -->
							</div>
						</div>
					</div>

<!-- row 2 -->
					<div class="row">
						<div class="row_img">
							<a href="https://www.qries.com/">
					        <img src="https://cdn.lifehacker.ru/wp-content/uploads/2019/03/Kak-prigotovit-bliny-na-moloke-7-luchshih-receptov_1551448011-1140x570.jpg">
					   		</a>
						</div>
						<div class="row_info">
							<a href="likbez.html"><span class="card_tag">ликбез</span></a>
							<a href="#" class="fa fa-facebook"></a>
							<a href="#" class="fa fa-twitter"></a>
							<a href="#" class="fa fa-google"></a>
							
							<h2>7 лучших рецептов блинов на молоке</h2></a>
							<p>Классические, ажурные, дрожжевые, картофельные и даже сгущёночные — блинов вкуснее вы ещё не пробовали.</p>
						<!-- 	<div class="likes_views">
								<div class="likes">
									<span class="like"><img src="https://icon-library.net/images/free-heart-icon/free-heart-icon-3.jpg"></span>
									<p>123</p>	
								</div> -->
							<!-- 	<div class="views">
									<span class="view"><img src="https://image.flaticon.com/icons/svg/44/44326.svg"></span>
									<p>123</p>	
								</div> -->
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
							<span class="heart"><img src="https://icon-library.net/images/free-heart-icon/free-heart-icon-3.jpg"></span>
							<h2>17 вкусных способов наполнить тарталетки</h2>
							<p>Неправильное планирование, соцсети и сомнительная конкуренция отнимают время и снижают эффективность вашего труда.</p>
							<!-- <div class="likes_views">
								<div class="likes">
									<span class="like"><img src="https://icon-library.net/images/free-heart-icon/free-heart-icon-3.jpg"></span>
									<p>123</p>	
								</div> -->
								<!-- <div class="views">
									<span class="view"><img src="https://image.flaticon.com/icons/svg/44/44326.svg"></span>
									<p>123</p>	
								</div> -->
							</div>
						</div>
				
				
					</div>
				</div>

				<div id="row2" style="display: none">
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
							<span class="heart"><img src="https://icon-library.net/images/free-heart-icon/free-heart-icon-3.jpg"></span>
							<h2>10 салатов с копчёной курицей, которые точно придутся по вкусу</h2>
							<p>Интересные сочетания с сыром, ананасами, яйцами, огурцами и не только.</p>
							<!-- <div class="likes_views">
								<div class="likes">
									<span class="like"><img src="http://pngimg.com/uploads/like/like_PNG89.png"></span>
									<p>123</p>	
								</div>
								<div class="views">
									<span class="view"><img src="https://image.flaticon.com/icons/svg/44/44326.svg"></span>
									<p>123</p>	
								</div>
							</div> -->
						</div>
					</div>

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
							<span class="heart"><img src="https://icon-library.net/images/free-heart-icon/free-heart-icon-3.jpg"></span>
							<h2>10 салатов с копчёной курицей, которые точно придутся по вкусу</h2>
							<p>Интересные сочетания с сыром, ананасами, яйцами, огурцами и не только.</p>
						<!-- 	<div class="likes_views">
								<div class="likes">
									<span class="like"><img src="http://pngimg.com/uploads/like/like_PNG89.png"></span>
									<p>123</p>	
								</div>
								<div class="views">
									<span class="view"><img src="https://image.flaticon.com/icons/svg/44/44326.svg"></span>
									<p>123</p>	
								</div>
							</div> -->
						</div>
					</div>

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
							<span class="heart"><img src="https://icon-library.net/images/free-heart-icon/free-heart-icon-3.jpg"></span>
							<h2>10 салатов с копчёной курицей, которые точно придутся по вкусу</h2>
							<p>Интересные сочетания с сыром, ананасами, яйцами, огурцами и не только.</p>
							<!-- <div class="likes_views">
								<div class="likes">
									<span class="like"><img src="http://pngimg.com/uploads/like/like_PNG89.png"></span>
									<p>123</p>	
								</div>
								<div class="views">
									<span class="view"><img src="https://image.flaticon.com/icons/svg/44/44326.svg"></span>
									<p>123</p>	
								</div>
							</div> -->
						</div>
					</div>
				</div>
			
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
