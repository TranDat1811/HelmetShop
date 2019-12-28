<?php 
	include('../connect.php');
	session_start();
	if(isset($_POST['login'])){
		$username=$_POST['username'];
		$password=md5($_POST['password']);	
		$sql="SELECT * FROM admin WHERE username='$username' and password='$password' limit 1 ";
		$query=mysql_query($sql);
		$nums=mysql_num_rows($query);

		if($nums>0){
			$_SESSION['dangnhap']=$username;
			header('location:index.php');
		}else{
			echo '<script language="javascript">alert("Sai tài khoản hoặc mật khẩu!");</script>';
			
	}}
?>

<link rel="stylesheet" type="text/css" href="admin-style/login-style.css">
<div class="container">
		<form action="" method="post">
			<div class="login-box"> 
				<div class="header">Login</div>
				<div class=""><input type="text" name="username" class="txt" placeholder="Username" required="" /></div>
				<div class=""><input type="password" name="password" class="txt" placeholder="Password" required=""/></div>

				<div><input type="submit" value="Login" class="btn" name="login"/></div>
			</div>
		</form>
	</div>