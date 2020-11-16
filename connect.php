<?php
	//connect to mysqli
	$conn = mysqli_connect('localhost','root','',"quanlybanhang") or die(mysqli_error());
	mysqli_query($conn,'SET NAMES "UTF8"');
?>