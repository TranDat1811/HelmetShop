<?php
	$MaNhom=$_GET['MaNhom'];
	$sql= "SELECT * FROM nhomhanghoa WHERE MaNhom='$MaNhom' ";
	$result=mysql_query($sql);
	$row=mysql_fetch_array($result);
	
?>
<form action="module/quan-ly-nhom-hang-hoa/xuly.php?MaNhom=<?php echo $row['MaNhom'] ?>" method="post" enctype="multipart.form-data">
<table width="50%" border=1>
	<tr class="header">
		<th colspan="2"><div align="center">Sửa nhóm hàng hóa</div></th>
	</tr>
	<tr>
		<td>Mã nhóm hàng hóa</td>
		<td><input type="text" name="ma-nhom-hh" value="<?php echo $row['MaNhom'] ?>"></td>
	</tr>
	<tr>
		<td>Tên nhóm hàng hóa</td>
		<td><input type="text" name="ten-nhom-hh" value="<?php echo $row['TenNhom'] ?>"></td>
	</tr>
	<tr>
		<td colspan="2"><div align="center"><input type="submit" name="sua" id="sua" value="Sửa"></div></td>
		 
	</tr>
</table>
</form>