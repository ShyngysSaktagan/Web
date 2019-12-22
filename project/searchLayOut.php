<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" href="./main.css">

	<style>
		#saerchLayOut{
			/*background-color: */
			padding: 50px;
			text-align: center;
		}

		#saerchLayOut .search{
		    border: none;
		    border-bottom: 2px solid red;
		    margin: 0 30px 0 30px;
		    width: 600px;
		    font-size: 30px;
		}

		#saerchLayOut .button{
		    border: none;
    		font-size: 40px;
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