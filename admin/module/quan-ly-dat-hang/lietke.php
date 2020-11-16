<?php
  $sql=" SELECT * FROM dathang";
  $result = mysqli_query($conn,$sql);

?>
<table width="90%" border="1" style="text-align: center;">
  <tr class="header">
    <th>Số đơn đặt hàng</th>
    <th>Mã số khách hàng</th>
    <th>Mã số nhân viên</th>
    <th>Ngày đặt hàng</th>
    <th>Trạng thái</th>
    <th colspan="3">Quản lí</th>
  </tr>
  <?php
    while ($row=mysqli_fetch_array($result)) {
  ?>
  <tr>
    <td><?php echo $row['SoDonDH'] ?></td>
    <td><?php echo $row['MSKH'] ?></td>
    <td><?php echo $row['MSNV'] ?></td>
    <td><?php echo $row['NgayDH'] ?></td>
    <td><?php echo $row['TrangThai'] ?></td>
    <td><a href="index.php?quanly=chitiet&SoDonDH=<?php echo $row['SoDonDH'] ?>&MSKH=<?php echo $row['MSKH'] ?>">Chi tiết</a></td>
    <td><a href="index.php?quanly=quan-ly-dat-hang&ac=sua&SoDonDH=<?php echo $row['SoDonDH'] ?>">Sửa</a></td>
    <td><a href="module/quan-ly-dat-hang/xuly.php?SoDonDH=<?php echo $row['SoDonDH'] ?>">Xóa</a></td>
  </tr>
 <?php 
    }
 ?>
</table>
