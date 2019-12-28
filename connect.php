<?php
	//connect to MySQL
	$conn = mysql_connect('localhost','root','') or die(mysql_error());
	$db = mysql_select_db("quanlybanhang", $conn) or die(mysql_error());
	

	mysql_query('SET NAMES "UTF8"');
?>