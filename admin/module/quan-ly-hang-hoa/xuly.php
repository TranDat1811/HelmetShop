<?php 
	include('../../../connect.php');
	$MSHH2=$_GET['MSHH'];
	$MSHH=$_POST['MSHH'];
	$TenHH=$_POST['TenHH'];
	$Gia=$_POST['Gia'];
	$SoLuongHang=$_POST['SoLuongHang'];
	$MaNhom=$_POST['MaNhom'];
	$Hinh=$_FILES['Hinh']['name'];
	$Hinh_tmp=$_FILES['Hinh']['tmp_name'];
	move_uploaded_file($Hinh_tmp,'uploads/'.$Hinh);
	$MoTaHH=$_POST['MoTaHH'];

	if(isset($_POST['them'])){
		//them
		if($MSHH!='' && $TenHH!='' && $Gia!='' && $SoLuongHang!='' && $MaNhom!='' && $Hinh!='' ){
		$sql ="INSERT INTO hanghoa (MSHH,TenHH,Gia,SoLuongHang,MaNhom,Hinh,MoTaHH) values ('$MSHH','$TenHH','$Gia','$SoLuongHang','$MaNhom','$Hinh','$MoTaHH') ";
		}	
		mysqli_query($conn,$sql);
		header('location:../../index.php?quanly=quan-ly-hang-hoa&ac=them');
	}elseif(isset($_POST['sua'])) {
		//sua
		if($Hinh!=''){
		$sql="UPDATE hanghoa set MSHH='$MSHH',TenHH='$TenHH',Gia='$Gia',SoLuongHang='$SoLuongHang',MaNhom='$MaNhom',Hinh='$Hinh',MoTaHH='$MoTaHH' where MSHH='$MSHH2'   ";
		}else{
			$sql="UPDATE hanghoa set MSHH='$MSHH',TenHH='$TenHH',Gia='$Gia',SoLuongHang='$SoLuongHang',MaNhom='$MaNhom',MoTaHH='$MoTaHH' where MSHH='$MSHH2'   ";
		}
		mysqli_query($conn,$sql);
		header('location:../../index.php?quanly=quan-ly-hang-hoa&ac=sua&MSHH='.$MSHH);
	}else{
		//xoa
		$sql = "DELETE FROM hanghoa WHERE MSHH = '$MSHH2' ";
		mysqli_query($conn,$sql);
		header('location:../../index.php?quanly=quan-ly-hang-hoa&ac=them');
	}
?>