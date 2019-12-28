<?php 
    
    if(isset($_POST['searchbtn'])){
        $search=$_POST['search'];
        $sql_search="SELECT * FROM hanghoa where TenHH LIKE '%$search%' ";
        $result_search=mysql_query($sql_search);
    }
?>                   
<div class="product">
<!-- Chi tiết nhóm hàng hóa -->
<p class="list-header">Kết quả tìm kiếm</p>
        <?php 
            if($count_search=mysql_num_rows($result_search)==0){
        ?>
            <p>Không tìm thấy sản phẩm nào</p>
            
            <?php 
                }else{
            ?>
        <?php 
                        while ($row_search=mysql_fetch_array($result_search)) {
                    ?>
            <a class="hanghoa" href="index.php?xem=chitiethanghoa&MaNhom=<?php echo $row_search['MaNhom'] ?>&MSHH=<?php echo $row_search['MSHH'] ?>">
                    <img src="admin/module/quan-ly-hang-hoa/uploads/<?php echo $row_search['Hinh'] ?>" alt="product" />
                    <div class="product-infor">      
                        <div class="product-name"><?php echo $row_search['TenHH'] ?></div>
                        <div class="product-price">Giá : <?php echo number_format($row_search['Gia']).' VNĐ' ?></div>
                    </div>
                </a>
            <?php 
                    }
                }
            ?>
</div>