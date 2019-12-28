


<form action="module/quan-ly-hang-hoa/xuly.php" method="post" enctype="multipart/form-data">
<table width="80%" border="1"  >
	<tr class="header" style="padding: 5px;">
		<th colspan="2"><div align="center">Thêm hàng hóa</div></th>
	</tr>
	<tr>
		<td>Mã số hàng hóa</td>
		<td><input type="text" name="MSHH" required=""></td>
	</tr>
	<tr>
		<td>Tên hàng hóa</td>
		<td><input type="text" name="TenHH" required=""></td>
	</tr>
	<tr>
		<td>Giá</td>
		<td><input type="text" name="Gia" required=""></td>
	</tr>
	<tr>
		<td>Số lượng</td>
		<td><input type="text" name="SoLuongHang" required=""></td>
	</tr>
	<?php 
		$sql="SELECT * FROM nhomhanghoa";
		$result=mysql_query($sql);
	?>
	<tr>
		<td>Mã nhóm hàng hóa</td>
		<td><select name="MaNhom">
			<?php 
				while ($row=mysql_fetch_array($result)) {

			?>
			<option value="<?php echo $row['MaNhom'] ?>"><?php echo $row['TenNhom']
			?></option>
			<?php
				}
			?>	
		</select></td>
	</tr>
	<tr>
		<td>Hình</td>
		<td><input type="file" name="Hinh" required=""></td>
	</tr>
	<tr>
		<td>Mô tả hàng hóa</td>
		<td><textarea name="MoTaHH" cols="100" rows="15"></textarea> </td>
	</tr>
	<tr>
		<td colspan="2"><div align="center"><input type="submit" name="them" id="them" value="Thêm"></div></td>
		 
	</tr>
</table>
</form>