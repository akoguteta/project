<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
		.a{
			width: 1270px;
			height: 130px;
			background-color: cyan;

		}
		.a ul{
			display: flex;
			padding: 20px 20px;
		}
		.a ul li{
			padding: 10px 60px;
			text-decoration: none;
			list-style: none;
		}
		.a ul li a{
			text-decoration: none;
		}
		.a ul li a:hover{
			width: 180px;
			height: 30px;
			border-radius: 10px;
			background-color: yellow;
		}
	</style>

</head>
<body>
	<form>
		<div class="a">
			<ul>
				<li><a href="">HOME</a></li>
				<li><a href="">ABOUT</a></li>
				<li><a href="">CONTACT US</a></li>
				<li><a href="uwase.php">ADD USER</a></li>
				<li><a href="selectuwase.php">VIEW USER</a></li>
				<li><a href="logout.php">LOGOUT</a></li>
			
			</ul>
		</div>
	</form>

</body>
</html>