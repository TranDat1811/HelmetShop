
<form action="module/quan-ly-nhan-vien/xuly.php" method="post" enctype="multipart/form-data">
<table width="80%" border="1"  >
	<tr class="header" style="padding: 5px;">
		<th colspan="2"><div align="center">Thêm nhân viên</div></th>
	</tr>
	
	<tr>
		<td>Họ tên nhân viên</td>
		<td><input type="text" name="HoTenNV" required=""></td>
	</tr>
	<tr>
		<td>Chức vụ</td>
		<td><select name="ChucVu">
			<option>Employee</option>
			<option>Manage</option>
			
		</select></td>
	</tr>
	<tr>
		<td>Địa chỉ</td>
		<td><input type="text" name="DiaChi" required=""></td>
	</tr>
	
	<tr>
		<td>Số điện thoại</td>
		<td><input type="text" name="SoDienThoai" required=""></td>
	</tr>
	<tr>
	<tr>
		<td colspan="2"><div align="center"><input type="submit" name="them" id="them" value="Thêm"></div></td>
		 
	</tr>
</table>
</form>