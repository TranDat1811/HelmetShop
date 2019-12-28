<div class="left">
	<?php
		if(isset($_GET['ac'])){
			$tam=$_GET['ac'];
		}else{
			$tam='';
		}if($tam=='them'){
			include('module/quan-ly-nhan-vien/them.php');
		}if($tam=='sua'){
			include('module/quan-ly-nhan-vien/sua.php');
		}
	?>
</div>

<div class="right">
	<?php
		include('module/quan-ly-nhan-vien/lietke.php');
	?>
</div>