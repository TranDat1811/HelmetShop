<?php 
	
	$sql="SELECT * FROM nhanvien WHERE MSNV='$_GET[MSNV]' ";
	$result=mysql_query($sql);
	$row=mysql_fetch_array($result);
?>

<form action="module/quan-ly-nhan-vien/xuly.php?MSNV=<?php echo $row['MSNV'] ?>" method="post" enctype="multipart/form-data">
<table width="80%" border="1"  >
	<tr class="header" style="padding: 5px;">
		<th colspan="2"><div align="center">Sửa thông tin nhân viên</div></th>
	</tr>
	
	<tr>
		<td>Họ tên nhân viên</td>
		<td><input type="text" name="HoTenNV" value="<?php echo $row['HoTenNV'] ?>"></td>
	</tr>
	<tr>
		<td>Chức vụ</td>
		<td><select name="ChucVu">
			<option>Employee</option>
			<option>Manage</option>
		</select></td></td>
	</tr>
	<tr>
		<td>Địa chỉ</td>
		<td><input type="text" name="DiaChi" value="<?php echo $row['DiaChi'] ?>"></td>
	</tr>
	
	<tr>
		<td>Số điện thoại</td>
		<td><input type="text" name="SoDienThoai" value="<?php echo $row['SoDienThoai'] ?>"></td>
	</tr>
	<tr>
	<tr>
		<td colspan="2"><div align="center"><input type="submit" name="sua" id="sua" value="Sửa"></div></td>
		 
	</tr>
</table>
</form>