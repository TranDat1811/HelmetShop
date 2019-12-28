<?php 
	include('../../../connect.php');
	$MaNhom = $_GET['MaNhom'];
	$maNhomHH=$_POST['ma-nhom-hh'];
	$tenNhomHH=$_POST['ten-nhom-hh'];
	if(isset($_POST['them'])){
		//them
		if($maNhomHH != '' && $tenNhomHH != ''){
			$sql =" INSERT INTO nhomhanghoa (MaNhom,TenNhom) values ('$maNhomHH','$tenNhomHH') ";
	}
		mysql_query($sql);
		header('location:../../?quanly=quan-ly-nhom-hang-hoa&ac=them');
	}elseif (isset($_POST['sua'])) {
		//sua
		if($maNhomHH != '' && $tenNhomHH != ''){
			$sql="UPDATE nhomhanghoa set MaNhom='$maNhomHH',TenNhom='$tenNhomHH' where MaNhom='$MaNhom'   ";
		}
		mysql_query($sql);
		header('location:../../index.php?quanly=quan-ly-nhom-hang-hoa&ac=sua&MaNhom='.$MaNhom);
	}else{
		//xoa
			$sql = "DELETE FROM nhomhanghoa WHERE MaNhom = '$MaNhom' ";
		mysql_query($sql);
		header('location:../../index.php?quanly=quan-ly-nhom-hang-hoa&ac=them');
	}
?>