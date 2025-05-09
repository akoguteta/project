<?php include_once("homepage.php");?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form>
		<center>
		<table border="1">
			<theader>
				<tr style="font-size: 40px; background-color: greenyellow;">
					<th>manager_id</th>
					<th>m_username</th>
					<th>m_password</th>
					<th colspan="2">action</th>
				</tr>
				<?php
				$conn=mysqli_connect('localhost','root','','hospital_mgt_system');
				if (isset($_GET['delete'])) {
					$a=$_GET['delete'];
					$delete="DELETE FROM `manager` WHERE m_id='$a'";
					$result=mysqli_query($conn,$delete);
				}
				$select="SELECT * FROM `manager`";
				$result=mysqli_query($conn,$select);
				while ($row=mysqli_fetch_array($result)) {
					$a=$row['m_id'];
					$b=$row['m_username'];
					$c=$row['m_password'];
					echo '
					<tr>
					<td style="font-size:30px; font-style:italic;">'.$a.'</td>
					<td style="font-size:30px; font-style:italic;">'.$b.'</td>
					<td style="font-size:30px; font-style:italic;">'.$c.'</td>
					<td style="font-size:30px; font-style:italic;"><button style="width:100px ; background-color: 
					black; border-radius: 12px; height: 30px;"><a href="?delete='.$a.'" style="text-decoration: none;  color: white;">DELETE</a></button></td>
					<td style="font-size:30px; font-style:italic;"><button style="width:100px ; background-color: 
					black; border-radius: 12px; height: 30px; font-style:italic;"><a href="updateuwase.php?update='.$a.'" style="text-decoration: none;  color: white;">UPDATE</a></button></td>
					<td></td>
					</tr>
					';

					// code...
				}

				?>
			</theader>
		</table>
	</form>
</center>

</body>
</html>