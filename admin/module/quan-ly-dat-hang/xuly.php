<?php 
	include('../../../connect.php');
	$SoDonDH2=$_GET['SoDonDH'];
	$SoDonDH=$_POST['SoDonDH'];
	$MSNV=$_POST['MSNV'];
	$TrangThai=$_POST['TrangThai'];
	
	if (isset($_POST['sua'])) {
		//sua
		$sql="UPDATE dathang set SoDonDH='$SoDonDH', MSNV='$MSNV',TrangThai='$TrangThai' where SoDonDH='$SoDonDH2'   ";
		mysql_query($sql);
		header('location:../../index.php?quanly=quan-ly-dat-hang&ac=sua&SoDonDH='.$SoDonDH);
	}else{
		//xoa
			$sql = "DELETE FROM dathang WHERE SoDonDH = '$SoDonDH2' ";
		mysql_query($sql);
		header('location:../../index.php?quanly=quan-ly-dat-hang');
	}
?>