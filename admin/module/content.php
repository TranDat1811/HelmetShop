<div class="content">
	<?php 
		if (isset($_GET['quanly'])) {
		$tam = $_GET['quanly'];
		}else{
			$tam='';
		}if ($tam=='quan-ly-nhom-hang-hoa') {
			include('module/quan-ly-nhom-hang-hoa/main.php');
		}if ($tam=='quan-ly-hang-hoa') {
			include('module/quan-ly-hang-hoa/main.php');
		}if($tam=='doimatkhau'){
			include('doimatkhau.php');
		}if($tam=='hello'){
			echo '<font style="font-size:50px;color:blue;font-weight: bold;  ">Chào mừng đến với trang web quản trị</font>';
		}if($tam=='quan-ly-dat-hang'){
			include('module/quan-ly-dat-hang/main.php');
		}if($tam=='chitiet'){
			include('module/quan-ly-dat-hang/chitiet.php');	
		}if($tam=='quan-ly-nhan-vien'){
			include('module/quan-ly-nhan-vien/main.php');
		}if($tam=='quan-ly-khach-hang'){
			include('module/quan-ly-khach-hang/lietke.php');
		}
	?>
</div>
<div class="clear"></div>