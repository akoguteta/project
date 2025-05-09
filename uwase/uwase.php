<?php include_once("homepage.php");?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form method="POST">
		<center>
		<input type="number" name="m_id" placeholder="enter manager_id" required><br><br>
		<input type="text" name="username" placeholder="enter username" required><br><br>
		<input type="text" name="password" placeholder="enter password" required><br><br>
		<button name="submit">insert</button>
		<?php
		if (isset($_POST['submit'])) {
			$a=$_POST['m_id'];
			$b=$_POST['username'];
			$c=$_POST['password'];
			$conn=mysqli_connect('localhost','root','','hospital_mgt_system');
			$insert="INSERT INTO `manager`VALUES ('$a','$b','$c')";
			$result=mysqli_query($conn,$insert);
			if ($result==true) {
				echo "record inserted";
				header("location:selectuwase.php");
				// code...
			}
			else{
				echo "record not inserted";
			}
			// code...
		}
		?>
	</form>
</center>

</body>
</html>