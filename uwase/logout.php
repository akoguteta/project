<?php include_once("homepage.php");?>
<?php
session_start();
session_destroy();
header("location:login.php");
?>