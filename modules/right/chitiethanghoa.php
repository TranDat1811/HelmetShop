<div class="product">
    <div class="list-header">Chi tiết sản phẩm</div>

<?php
    $_SESSION['trang_chi_tiet_gio_hang']="co";
    $id=$_GET['MSHH'];
    $tv="select * from hanghoa where MSHH='$id'";
    $tv_1=mysql_query($tv);
    $tv_2=mysql_fetch_array($tv_1);
    $link_anh="admin/module/quan-ly-hang-hoa/uploads/".$tv_2['Hinh'];
    echo "<table style='font-size:18px;'>";
        echo "<tr>";
            echo "<td width='250px' align='center' >";
                echo "<img src='$link_anh' width='100%' >";
            echo "</td>";
            echo "<td valign='top' >";
                echo "<div style='color:blue;font-size: 20px;'>";
                    echo $tv_2['TenHH'];
                echo "</div>";
                
                echo "<br>";
                $gia=$tv_2['Gia'];
                $gia=number_format($gia).' đ';
                echo '<div style="color: red;">'.$gia.'</div>';
                
                echo "<br>";
                echo $tv_2['MoTaHH'];
                echo "<br>";
                echo "<br>";
                echo "<form>";
                    echo "<input type='hidden' name='xem' value='giohang' > ";
                    echo "<input type='hidden' name='MSHH' value='".$_GET['MSHH']."' > ";
                     
                    echo "<input type='text' name='so_luong' value='1' style='width:50px' >";
                    echo "<input type='submit' value='Thêm vào giỏ' style='margin-left:5px' > ";
                echo "</form>"; 
            echo "</td>";
        echo "</tr>";
        echo "<tr>";
            echo "<td colspan='2' >";
                echo "<br>";
                echo "<br>";
                
            echo "</td>";
        echo "</tr>";
    echo "</table>";
?>
    <!--Sản phẩm cùng loại-->
    <?php
        $sql_spcungloai=mysql_query("SELECT * FROM hanghoa WHERE MaNhom='$_GET[MaNhom]' and hanghoa.MSHH<>'$_GET[MSHH]' ");
    ?>

    <p class="list-header" style="margin-top: 10px;">Sản phẩm cùng loại</p>
                    <?php
                        while ($row_spcungloai=mysql_fetch_array($sql_spcungloai)) {
                    ?>
            <a class="hanghoa" href="index.php?xem=chitiethanghoa&MaNhom=<?php echo $row_spcungloai['MaNhom'] ?>&MSHH=<?php echo $row_spcungloai['MSHH'] ?>">
                    <img src="admin/module/quan-ly-hang-hoa/uploads/<?php echo $row_spcungloai['Hinh'] ?>" alt="product"/>
                    <div class="product-infor">      
                        <div class="product-name"><?php echo $row_spcungloai['TenHH'] ?></div>
                        <div class="product-price">Giá : <?php echo number_format($row_spcungloai['Gia']).' VNĐ' ?></div>
                    </div>
                </a>
                    <?php
                        }
                    ?>
</div>