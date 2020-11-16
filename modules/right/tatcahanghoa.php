<?php 
    // if(isset($_GET['page'])){
    //     $get_page=$_GET['page'];
    // }else{
    //     $get_page='';
    // }
    // if ($get_page=='' || $get_page==1) {
    //     $page1 = 0;
    // }else{
    //     $page1=($get_page*8)-8;
    // }

    $sql_all="SELECT * FROM hanghoa";
    $result_all = mysqli_query($conn,$sql_all);
?>
 

<div class="product">
    <!-- Danh sách tất cả sản phẩm -->
    <p class="list-header">Tất cả sản phẩm</p>
                    <?php
                        while ($row_all=mysqli_fetch_array($result_all)) {
                    ?>
            <a class="hanghoa" href="index.php?xem=chitiethanghoa&MaNhom=<?php echo $row_all['MaNhom'] ?>&MSHH=<?php echo $row_all['MSHH'] ?>">
                    <img src="admin/module/quan-ly-hang-hoa/uploads/<?php echo $row_all['Hinh'] ?>" alt="product" />
                    <div class="product-infor">      
                        <div class="product-name"><?php echo $row_all['TenHH'] ?></div>
                        <div class="product-price"><?php echo number_format($row_all['Gia']).' VNĐ' ?></div>
                    </div>
                </a>
            <?php
                    }
                ?>


</div>

<!-- Phân trang -->
<!-- <span>
<p style="margin-left: 50%;font-size: 1.2rem;">

    <?php
        // $sql_page=mysql_query("SELECT * From hanghoa");
        // $count=mysql_num_rows($sql_page);
        // $a=ceil($count/10);
        // for ($b=1; $b<=$a ; $b++) {
        //     echo '<a href="?page='.$b.' "  style="margin: 5px;" >'.$b.'</a>';
        // }
    ?>
    <?php 
        // if($get_page>1)
        //     echo '<br/>'.'Trang hiện tại : '.$get_page;
        
    ?>
</p>
</span> -->

    