<div class="product" style="background: #fff;">
<?php 
	if(isset($_POST['cap_nhat_gio_hang']))
    {
        include("modules/right/cap_nhat_gio_hang.php");
        
    }   
    if(isset($_POST['thong_tin_khach_hang']))
    {
        include("modules/right/thuc_hien_mua_hang.php");
    }
	if(isset($_GET['MSHH']) and $_SESSION['trang_chi_tiet_gio_hang']=="co")
	{
		$_SESSION['trang_chi_tiet_gio_hang']="huy_bo";
		if(isset($_SESSION['id_them_vao_gio']))
		{
			$so=count($_SESSION['id_them_vao_gio']);
			$trung_lap="khong";
			for($i=0;$i<$so;$i++)
			{
				if($_SESSION['id_them_vao_gio'][$i]==$_GET['MSHH'])
				{
					$trung_lap="co";
					$vi_tri_trung_lap=$i;
					break;
				}
			}
			if($trung_lap=="khong")
			{
				$_SESSION['id_them_vao_gio'][$so]=$_GET['MSHH'];
				$_SESSION['sl_them_vao_gio'][$so]=$_GET['so_luong'];
			}
			if($trung_lap=="co")
			{
				$_SESSION['sl_them_vao_gio'][$vi_tri_trung_lap]=$_SESSION['sl_them_vao_gio'][$vi_tri_trung_lap]+$_GET['so_luong'];
			}
		}
		else
		{
			$_SESSION['id_them_vao_gio'][0]=$_GET['MSHH'];
			$_SESSION['sl_them_vao_gio'][0]=$_GET['so_luong'];
		}
	}

	$gio_hang="khong";
	if(isset($_SESSION['id_them_vao_gio']))
	{
		$so_luong=0;
		for($i=0;$i<count($_SESSION['id_them_vao_gio']);$i++)
		{
			$so_luong=$so_luong+$_SESSION['sl_them_vao_gio'][$i];
		}
		if($so_luong!=0)
		{
			$gio_hang="co";
		}
	}
	// GIỎ HÀNG
	echo '<div class="list-header">Giỏ hàng</div>';
	echo "<div>";
	echo "<br>";
	if($gio_hang=="khong")
	{
		echo "Không có sản phẩm trong giỏ hàng";
	}
	else 
	{
		echo "<form action='' method='post' >"; 
		echo "<input type='hidden' name='cap_nhat_gio_hang' value='co' > ";
		echo "<table style='margin:5px;'>";
			echo "<tr>";
				echo "<td width='30%' >Tên</td>";
				echo "<td width='20%' >Số lượng</td>";
				echo "<td width='20%' >Đơn giá</td>";
				echo "<td width='20%' >Thành tiền</td>";
				
			echo "</tr>";
			$tong_cong=0;
			for($i=0;$i<count($_SESSION['id_them_vao_gio']);$i++)
			{
			
				$tv="select MSHH,TenHH,Gia,SoLuongHang from hanghoa where MSHH='".$_SESSION['id_them_vao_gio'][$i]."'";
				$tv_1=mysqli_query($conn,$tv);
				$tv_2=mysqli_fetch_array($tv_1);
				
				$tien=$tv_2['Gia']*$_SESSION['sl_them_vao_gio'][$i];
				$tong_cong=$tong_cong+$tien;
				$name_id="id_".$i;
				$name_sl="sl_".$i;
				if($_SESSION['sl_them_vao_gio'][$i]!=0)
				{
				echo "<tr>";
					echo "<td>".$tv_2['TenHH']."</td>";
					echo "<td>";
					echo "<input type='hidden' name='".$name_id."' value='".$_SESSION['id_them_vao_gio'][$i]."' >";

					echo "<input type='number' style='width:50px' name='".$name_sl."' value='". $_SESSION['sl_them_vao_gio'][$i]."' > ";
					echo "</td>";
					echo "<td>".number_format($tv_2['Gia'])."</td>";
					echo "<td>".number_format($tien)."</td>";
					
				echo "</tr>";
				}
			}	
			echo "<tr>";
				echo "<td>&nbsp;</td>";
				echo "<td><input type='submit' value='Cập nhật' > </td>";
				echo "<td>&nbsp;</td>";
				echo "<td>&nbsp;</td>";
				
			echo "</tr>";	
		echo "</table>";
		echo "</form>";
		echo "<br>";
		echo "<span style= 'font-weight:bold;'>Tổng giá trị đơn hàng là : ".number_format($tong_cong)." VNĐ</span>";
		echo "</div>"; 


		echo "<br>";
	echo "<br>";

	// FORM NHẬP THÔNG TIN KHÁCH HÀNG
	echo "<form method='post' action='' >";
		echo "<input type='hidden' name='thong_tin_khach_hang' value='co' > ";
		echo "<table >";
			echo "<tr>";
				echo "<td colspan='2' height='30px' >";
					echo "<b>Thông tin mua hàng</b>";
				echo "</td>";
			echo "</tr>";
			echo "<tr style='color: red;'>";
				echo "<td height='40px' >Lưu ý : </td>";
				echo "<td>";
					echo "Tên người mua , địa chỉ , điện thoại bắt buộc phải điền vào";
				echo "</td>";
			echo "</tr>";
			echo "<tr>";
				echo "<td  >Tên người mua :</td>";
				echo "<td>";
					echo "<input type='text'  name='ten_nguoi_mua' required>";
				echo "</td>";
			echo "</tr>";
			
			echo "<tr>";
				echo "<td>Địa chỉ : </td>";					
				echo "<td>";
					echo "<textarea name='dia_chi' required></textarea>";
				echo "</td>";
			echo "</tr>";
			echo "<tr>";
				echo "<td>Điện thoại : </td>";
				echo "<td>";
					echo "<input type='text' name='dien_thoai' required>";
				echo "</td>";
			echo "</tr>";
			
			echo "<tr>";
				echo "<td>&nbsp;</td>";
				echo "<td>";
					echo "<input type='submit' value='Mua hàng' >";
				echo "</td>";
			echo "</tr>";
		echo "</table>";
	echo "</form>";
	}
	
?>
</div>