<?php
  $sql=" SELECT * FROM nhomhanghoa";
  $result = mysql_query($sql);
?>

<style>
  table{
    text-align: center;
  }
</style>
<table width="80%" border="1" >
  <tr class="header">
    <th>Mã nhóm hàng hóa</th>
    <th>Tên nhóm hàng hóa</th>
    <th colspan="2">Quản lí</th>
  </tr>
  <?php
    while ($row=mysql_fetch_array($result)) {
  ?>
  <tr>
    <td><?php echo $row['MaNhom'] ?></td>
    <td><?php echo $row['TenNhom'] ?></td>
    <td><a href="index.php?quanly=quan-ly-nhom-hang-hoa&ac=sua&MaNhom=<?php echo $row['MaNhom'] ?>" >Sửa</a></td>
    <td><a href="module/quan-ly-nhom-hang-hoa/xuly.php?MaNhom=<?php echo $row['MaNhom'] ?>" >Xóa</a></td>
  </tr>
  <?php
    }
  ?>
</table>
