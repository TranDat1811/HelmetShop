<div class="left">
	<?php
		include '../connect.php';
		if(isset($_GET['ac'])){
			$tam=$_GET['ac'];
		}else{
			$tam='';
		}if($tam=='them'){
			include('module/quan-ly-hang-hoa/them.php');
		}if($tam=='sua'){
			include('module/quan-ly-hang-hoa/sua.php');
		}
	?>
</div>

<div class="right">
	<?php
		include('module/quan-ly-hang-hoa/lietke.php');
	?>
</div>