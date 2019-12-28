<?php
	$SoDonDH=$_GET['SoDonDH'];
	$sql= "SELECT * FROM dathang WHERE SoDonDH='$SoDonDH' ";
	$result=mysql_query($sql);
	$row=mysql_fetch_array($result);
	
?>
<form action="module/quan-ly-dat-hang/xuly.php?SoDonDH=<?php echo $row['SoDonDH'] ?>" method="post" enctype="multipart/form-data">
<table width="50%" border=1>
	<tr class="header">
		<th colspan="2"><div align="center">Sửa nhóm hàng hóa</div></th>
	</tr>
	<tr>
		<td>Số đơn đặt hàng:</td>
		<td><input type="text" name="SoDonDH" value="<?php echo $row['SoDonDH'] ?>"></td>
	</tr>
	
	<?php 
		$sql_nhanvien="SELECT * FROM nhanvien";
		$result_nhanvien=mysql_query($sql_nhanvien);
	?>
	<tr>
		<td>Mã số nhân viên:</td>
		<td><select name="MSNV" >
			<?php 
				while ($row_nhanvien=mysql_fetch_array($result_nhanvien)) {
					if($row['MSNV'] == $row_nhanvien['MSNV']){
			?>
			<option selected="selected"  value="<?php echo $row_nhanvien['MSNV'] ?>" ><?php echo $row_nhanvien['MSNV'] ?>
			</option>
			<?php
				}else{
			?>
			<option value="<?php echo $row_nhanvien['MSNV'] ?>" ><?php echo $row_nhanvien['MSNV'] ?></option>
			<?php 
				}
				}
			?>
		</select></td>
	</tr>
	
	<tr>
		<td>Trạng thái</td>
		<td>
			<select name="TrangThai">
				<option>Đang xử lí</option>
				<option>Đã xong</option>
			</select>
		</td>
	</tr>
	<tr>
		<td colspan="2"><div align="center"><input type="submit" name="sua" id="sua" value="Sửa"></div></td>
		 
	</tr>
</table>
</form>