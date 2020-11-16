<?php
    $sql_abc ='SELECT * FROM nhomhanghoa ';
    $result_abc=mysqli_query($conn,$sql_abc);
 ?>
<div class="top">
    <header>
        <a href="index.php" class="logo">SD SHOP</a>
        <div class="menu-toggle"></div>
        <nav>
            <ul>

                <li><a href="index.php" class="active"><i class="fa fa-home"></i>   Trang chủ</a></li>
                <li><a href="index.php" >  Tất cả sản phẩm</a></li>
                <li><a href="index.php?xem=giohang"><i class="fa fa-shopping-cart"></i>   Giỏ hàng</a></li>
                <li><a href= "mailto:123shop@gmail.com"><i class="fa fa-envelope"></i> sdshop@gmail.com</a></li>
            <li class="list-inline-item"><a href="tel://0123456789"><i class="fa fa-phone"></i> 0123456789</a></li>
                
                <li class="search-container">
                    <form action="index.php" method="post" enctype="multipart/form-data">
                        <input type="text" name="search" placeholder="Tìm kiếm...">
                        <button type="submit" name="searchbtn"><i class="fa fa-search"></i></button>
                    </form>
                </li>
            </ul>
        </nav>
        <div class="clearfix"></div>
    </header>
    <div class="banner">
        <img src="images/banner/banner.jpg" alt="banner" class="img-banner" />
    </div>
</div>