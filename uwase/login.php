<?php include_once("homepage.php");?>
<!DOCTYPE html>


<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
		form{
			width: 280px;
			height: 200px; 
			border: solid;
			border-radius: 10px;
		}
		input{
			width: 160px;
			height: 25px;
			border-radius: 10px;
		}
	</style>
</head>
<body>
	<center>
	<form method="POST">
		<p>login form</p>
		<input type="text" name="username" placeholder="enter username" required><br><br>
		<input type="text" name="password" placeholder="enter password" required><br><br>
		<button name="submit">LOGIN</button>
		<?php
		if (isset($_POST['submit'])) {
			$b=$_POST['username'];
			$c=$_POST['password'];
			$conn=mysqli_connect('localhost','root','','hospital_mgt_system');
			$insert="SELECT m_username, m_password FROM `manager` WHERE m_username='$b' and m_password='$c'";
			$result=mysqli_query($conn,$insert);
			$row=mysqli_fetch_array($result);
			if (is_array($row)) {
				$_SESSION[$b]=$row['m_username'];
				$_SESSION[$c]=$row['m_password'];
				echo "username and password are corrected";
			}
			else{
				echo "not corrected";
			}
		}
		?>
	</form>
</center>
</body>
</html>