<?php
  $sql=" SELECT * FROM hanghoa";
  $result = mysqli_query($conn,$sql);
?>

<style type="text/css">
  table{
    text-align: center;
  }
</style>
<table width="95%" border="1" >
  <tr class="header">
    <th>Mã số HH</th>
    <th>Tên hàng hóa</th>
    <th>Giá</th>
    <th>Số lượng hàng hóa</th>
    <th>Mã nhóm hàng hóa</th>
    <th>Hình</th>
    <th>Mô tả hàng hóa</th>
    <th colspan="2">Quản lí</th>
  </tr>
  <?php
    while ($row=mysqli_fetch_array($result)) {
  ?>
  <tr>
    <td><?php echo $row['MSHH'] ?></td>
    <td><?php echo $row['TenHH'] ?></td>
    <td><?php echo $row['Gia'] ?></td>
    <td><?php echo $row['SoLuongHang'] ?></td>
    <td><?php echo $row['MaNhom'] ?></td>
    <td><img src="module/quan-ly-hang-hoa/uploads/<?php echo $row['Hinh'] ?>" width="60" height="60"></td>
    <td><?php echo $row['MoTaHH'] ?></td>
    <td><a href="index.php?quanly=quan-ly-hang-hoa&ac=sua&MSHH=<?php echo $row['MSHH'] ?>">Sửa</a></td>
    <td><a href="module/quan-ly-hang-hoa/xuly.php?MSHH=<?php echo $row['MSHH'] ?>">Xóa</a></td>
  </tr>
 <?php 
    }
 ?>
</table>

