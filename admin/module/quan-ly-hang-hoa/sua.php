<?php 
	$sql="SELECT * FROM hanghoa WHERE MSHH='$_GET[MSHH]' ";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($result);
?>
  
<form action="module/quan-ly-hang-hoa/xuly.php?MSHH=<?php echo $row['MSHH'] ?>" method="post" enctype="multipart/form-data">
<table width="80%" border="1"  >
	<tr class="header" style="padding: 5px;">
		<th colspan="2"><div align="center">Sửa hàng hóa</div></th>
	</tr>
	<tr>
		<td>Mã số hàng hóa</td>
		<td><input type="text" name="MSHH" value="<?php echo $row['MSHH'] ?>"></td>
	</tr>
	<tr>
		<td>Tên hàng hóa</td>
		<td><input type="text" name="TenHH" value="<?php echo $row['TenHH'] ?>"></td>
	</tr>
	<tr>
		<td>Giá</td>
		<td><input type="text" name="Gia" value="<?php echo $row['Gia'] ?>"></td>
	</tr>
	<tr>
		<td>Số lượng</td>
		<td><input type="text" name="SoLuongHang" value="<?php echo $row['SoLuongHang'] ?>"></td>
	</tr>
	<?php 
		$sql_nhomhanghoa="SELECT * FROM nhomhanghoa";
		$result_nhomhanghoa=mysqli_query($conn,$sql_nhomhanghoa);
	?>
	<tr>
		<td>Mã nhóm hàng hóa</td>
		<td><select name="MaNhom" >
			<?php 
				while ($row_nhomhanghoa=mysqli_fetch_array($result_nhomhanghoa)) {
					if($row['MaNhom'] == $row_nhomhanghoa['MaNhom']){
			?>
			<option selected="selected"  value="<?php echo $row_nhomhanghoa['MaNhom'] ?>" ><?php echo $row_nhomhanghoa['TenNhom']
			?></option>
			<?php
				}else{
			?>
			<option value="<?php echo $row_nhomhanghoa['MaNhom'] ?>" ><?php echo $row_nhomhanghoa['TenNhom']?></option>
			<?php 
				}
				}
			?>
		</select></td>
	</tr>
	<tr>
		<td>Hình</td>
		<td><input type="file" name="Hinh"><img src="module/quan-ly-hang-hoa/uploads/<?php echo $row['Hinh'] ?>" width="60" height="60"></td>
	</tr>
	<tr>
		<td>Mô tả hàng hóa</td>
		<td align="left"><textarea name="MoTaHH" cols="100" rows="15"><?php echo $row['MoTaHH'] ?></textarea></td>
	</tr>
	<tr>
		<td colspan="2"><div align="center"><input type="submit" name="sua" id="sua" value="Sửa"></div></td>
		 
	</tr>
</table>
</form>