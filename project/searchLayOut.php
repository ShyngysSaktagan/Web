<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" href="./main.css">

	<style>
		#saerchLayOut{
			padding: 50px;
      text-align: center;
      /*position: fixed;*/
      
	}

	.search{
		border: none;
        border-bottom: 2px solid red;
        margin: 0 30px 0 30px;
        width: 600px;
        font-size: 30px;
            background: none;
	}

	.button {
		border: none;
        font-size: 40px;
        background: none;
        color: black;	
	}
	</style>

</head>
<body>
	<div id="saerchLayOut">
		<form action="search.php" method="get">
			<label>
				
				<input class="search" type="text" name="keywords" autocomplete="off">
			</label>

			<input class="button" type="submit" value="search">
		</form>

	</div>
</body>
</html>