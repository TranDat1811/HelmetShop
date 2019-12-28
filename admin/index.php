
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="admin-style/style.css" />
</head>
<body>
	<?php 
		session_start();
		if(!isset($_SESSION['dangnhap'])){
			header('location:login.php');
		}
		
	?>
	<div class="container">
		<?php 
			include('../connect.php');
			include('module/header.php');
			include('module/menu.php');
			include('module/content.php');
			include('module/footer.php');
		?>
	</div>
	
	
</body>
</html>