<?php 
    $sql_hanghoa="SELECT * FROM hanghoa WHERE MaNhom='$_GET[MaNhom]' ";
    $result_hanghoa = mysqli_query($conn,$sql_hanghoa);
    
    $sql_tennhom="SELECT * FROM nhomhanghoa WHERE MaNhom='$_GET[MaNhom]' ";
    $result_tennhom = mysqli_query($conn,$sql_tennhom);
    $row_tennhom=mysqli_fetch_array($result_tennhom);
?>                   
<div class="product">
<!-- Chi tiết nhóm hàng hóa -->
<p class="list-header"><?php echo $row_tennhom['TenNhom'] ?></p>
        <?php 
            while ($row_hanghoa=mysqli_fetch_array($result_hanghoa)) {
        ?>
            <a class="hanghoa" href="index.php?xem=chitiethanghoa&MaNhom=<?php echo $row_hanghoa['MaNhom'] ?>&MSHH=<?php echo $row_hanghoa['MSHH'] ?>">
                    <img src="admin/module/quan-ly-hang-hoa/uploads/<?php echo $row_hanghoa['Hinh'] ?>" alt="product" />
                    <div class="product-infor">      
                        <div class="product-name"><?php echo $row_hanghoa['TenHH'] ?></div>
                        <div class="product-price">Giá : <?php echo number_format($row_hanghoa['Gia']).' VNĐ' ?></div>
                    </div>
                </a>
            <?php 
                    }
            ?>
</div>