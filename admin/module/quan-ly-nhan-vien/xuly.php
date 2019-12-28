<?php
	include('../../../connect.php');
	$MSNV_tmp=$_GET['MSNV'];
	$MSNV=$_POST['MSNV'];
	$HoTenNV=$_POST['HoTenNV'];
	$ChucVu=$_POST['ChucVu'];
	$DiaChi=$_POST['DiaChi'];
	$SoDienThoai=$_POST['SoDienThoai'];
	
	$sql_nhanvien="SELECT MAX(CAST(MSNV AS INT)) AS MSNV FROM nhanvien ";
			$result_nhanvien=mysql_query($sql_nhanvien);
			if(mysql_num_rows($result_nhanvien)>0){
				while($row_nhanvien=mysql_fetch_assoc($result_nhanvien)){
					if($row_nhanvien['MSNV'] == "")
						$MSNV=0;
					else
						$MSNV = intval($row_nhanvien['MSNV']) +1 ;
				}
			}
if(isset($_POST['them'])){
		
		//them
		if($HoTenNV!='' && $ChucVu!='' && $DiaChi!='' && $SoDienThoai!=''){
		$sql ="INSERT INTO nhanvien (MSNV,HoTenNV,ChucVu,DiaChi,SoDienThoai) values ('$MSNV','$HoTenNV','$ChucVu','$DiaChi','$SoDienThoai') ";
		}	
		mysql_query($sql);
		header('location:../../index.php?quanly=quan-ly-nhan-vien&ac=them');
	}elseif(isset($_POST['sua'])) {
		//sua
			
			$sql="UPDATE nhanvien set HoTenNV='$HoTenNV',ChucVu='$ChucVu',DiaChi='$DiaChi',SoDienThoai='$SoDienThoai' where MSNV='$MSNV_tmp'   ";
		
		mysql_query($sql);
		header('location:../../?quanly=quan-ly-nhan-vien&ac=sua&MSNV='.$MSNV);
	}else{
		//xoa
		$sql = "DELETE FROM nhanvien WHERE MSNV = '$MSNV_tmp' ";
		mysql_query($sql);
		header('location:../../?quanly=quan-ly-nhan-vien&ac=them');
	}


?>