<?php 
	if (isset($_GET['ac']) && $_GET['ac']=='logout') {
		unset($_SESSION['dangnhap']);//bỏ duy nhất 1 session được chỉ định
		//session_destroy(); //bỏ tất cả các session
		 header('location:login.php');
	}

?>
<div class="menu">
			<ul>
				<li><a href="index.php?quanly=hello"> Trang chủ</a></li>
				<li><a href="index.php?quanly=quan-ly-nhom-hang-hoa&ac=them">Nhóm hàng hóa</a> </li>
				<li><a href="index.php?quanly=quan-ly-hang-hoa&ac=them">Hàng hóa</a></li>
				<li><a href="index.php?quanly=quan-ly-dat-hang&ac=them">Đặt hàng</a></li>
				<li><a href="index.php?quanly=quan-ly-nhan-vien&ac=them">Nhân viên</a></li>
				<li><a href="index.php?quanly=quan-ly-khach-hang">Khách hàng</a></li>
			<span class="admin">
				<li><a href="index.php?quanly=doimatkhau">Đổi mật khẩu</a></li>
				<li><a href="index.php?ac=logout">Đăng xuất</a></li>
			</span>
			</ul>
		</div>