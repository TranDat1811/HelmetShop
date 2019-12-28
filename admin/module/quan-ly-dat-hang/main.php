<div class="left">
	<?php
		if(isset($_GET['ac'])){
			$tam=$_GET['ac'];
		}else{
			$tam='';
		}if($tam=='sua'){
			include('module/quan-ly-dat-hang/sua.php');
		}
	?>
</div>

<div class="right">
	<?php
		include('module/quan-ly-dat-hang/lietke.php');
	?>
</div>