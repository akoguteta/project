<?php include_once("homepage.php");?>
<?php
$conn=mysqli_connect('localhost','root','','hospital_mgt_system');
if (isset($_GET['update'])) {
	$a=$_GET['update'];
	$select="SELECT * FROM `manager` WHERE m_id='$a'";
	$result=mysqli_query($conn,$select);
	$row=mysqli_fetch_array($result);
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form method="POST">
		<input type="number" name="m_id" placeholder="enter manager_id" value="<?php echo $row['m_id'];?>" required><br><br>
		<input type="text" name="username" placeholder="enter username"  value="<?php echo $row['m_username'];?>"required><br><br>
		<input type="text" name="password" placeholder="enter password" required value="<?php echo $row['m_password'];?>"><br><br>
		<button name="submit">insert</button>
		<?php
		if (isset($_POST['submit'])) {
			$a=$_POST['m_id'];
			$b=$_POST['username'];
			$c=$_POST['password'];
			$conn=mysqli_connect('localhost','root','','hospital_mgt_system');
			$insert="UPDATE `manager` SET `m_id`='$a',`m_username`='$b',`m_password`='$c' WHERE m_id=$a";
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

</body>
</html>