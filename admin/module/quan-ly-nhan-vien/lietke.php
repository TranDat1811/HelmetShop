<?php
  $sql=" SELECT * FROM nhanvien";
  $result = mysqli_query($conn,$sql);
?>
<table width="80%" border="1" style="text-align: center;">
  <tr class="header">
    <th>Mã số nhân viên</th>
    <th>Họ tên nhân viên</th>
    <th>Chức vụ</th>
    <th>Địa chỉ</th>
    <th>Số điện thoại</th>
    <th colspan="2">Quản lí</th>
  </tr>
  <?php
    while ($row=mysqli_fetch_array($result)) {
  ?>
  <tr>
    <td><?php echo $row['MSNV'] ?></td>
    <td><?php echo $row['HoTenNV'] ?></td>
    <td><?php echo $row['ChucVu'] ?></td>
    <td><?php echo $row['DiaChi'] ?></td>
    <td><?php echo $row['SoDienThoai'] ?></td>
    <td><a href="index.php?quanly=quan-ly-nhan-vien&ac=sua&MSNV=<?php echo $row['MSNV'] ?>">Sửa</a></td>
    <td><a href="module/quan-ly-nhan-vien/xuly.php?MSNV=<?php echo $row['MSNV'] ?>">Xóa</a></td>
  </tr>
 <?php 
    }
 ?>
</table>
