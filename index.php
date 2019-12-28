<?php

    
 ?>   
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel="shortcut icon" href="icon.jpg">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>sd Shop</title>
    <link rel="stylesheet" type="text/css" href="style/style.css" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script
        src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous">
    </script>
    <script language="javascript" src="script/script.js"></script>
    
</head>
<body>

	<div class="container">
        <?php
            session_start();
            include('connect.php');
            include('modules/top.php');
            include('modules/content.php');
            include('modules/footer.php');
        ?>
</body>
</html>
