 <?php
    $sql_nhomhanghoa ='SELECT * FROM nhomhanghoa ';
    $result_nhomhanghoa=mysqli_query($conn,$sql_nhomhanghoa);
 ?>
<div class="vertical-menu">

       <div class="product-types">
            <p class="list-header">Danh mục sản phẩm</p>
            <?php 
                while ($row_nhomhanghoa = mysqli_fetch_array($result_nhomhanghoa)) {    
            ?>
                <a href="index.php?xem=chitietnhomhanghoa&MaNhom=<?php echo $row_nhomhanghoa['MaNhom'] ?> ">
                    <?php echo $row_nhomhanghoa['TenNhom']; ?>
                </a>
            <?php 
                }   
            ?>
        </div>
</div>