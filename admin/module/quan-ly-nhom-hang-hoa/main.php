<div class="left">
	<?php
		if(isset($_GET['ac'])){
			$tam=$_GET['ac'];
		}else{
			$tam='';
		}if($tam=='them'){
			include('module/quan-ly-nhom-hang-hoa/them.php');
		}if($tam=='sua'){
			include('module/quan-ly-nhom-hang-hoa/sua.php');
		}
	?>
</div>

<div class="right">
	<?php
		include('module/quan-ly-nhom-hang-hoa/lietke.php');
	?>
</div>