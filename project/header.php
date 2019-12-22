	<section>
		<header>
		    <div class="container">
		      <h1 class="logo">
		      	<a href="contents.html" class="show">≣</a>
		      	<a href="#">Foodcord</a>
		      </h1>

		      <nav>
		        <ul>
		          <li class="main"><a href="#" style="color:white">НОВОСТИ</a></li>
		          <li class="new"><a href="http://localhost/project/header/new.php">СВЕЖЕЕ</a></li>
		          <li class="best"><a href="best.html">ЛУЧШЕЕ</a></li>
		          <!-- form -->
		          <li><a href="http://localhost/project/searchLayOut.php" onclick="showOverlay()"><img class="loop" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/55/Magnifying_glass_icon.svg/490px-Magnifying_glass_icon.svg.png"></a></li>
		          <li class="user"><a href="/Users/shyngys/Desktop/Admin/111/AdminPages/admin.html">User</a></li>
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

	<div class="saerchLayOut" style="padding: 50px;
      text-align: center;
      position: fixed;
      top: 0;
      left: 0;
      bottom: 0;
      right: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5);

      ">
		<form action="search.php" method="get" >
			<label>
				
				<input style="border: none;
        border-bottom: 2px solid red;
        margin: 0 30px 0 30px;
        width: 600px;
        font-size: 30px;
            background: none;
" class="search" type="text" name="keywords" autocomplete="off">
			</label>

			<input style="border: none;
        font-size: 40px;
        background: none;
        color: white" class="button" type="submit" value="search">
		</form>

	</div>

