<div class="content">
      <?php
        include('modules/left/vertical-menu.php');
      ?>
      
        <?php
            
            if(isset($_GET['xem'])){
                $tam=$_GET['xem'];
            }else{
                $tam='';
            }if($tam=='chitietnhomhanghoa'){
                include('modules/right/chitietnhomhanghoa.php');
            }elseif($tam=='chitiethanghoa'){
                include('modules/right/chitiethanghoa.php');
            }elseif($tam=='giohang'){
                include('modules/right/cart.php');
            
                   
            }elseif($tam=='thanhtoan'){
                include('modules/right/thanhtoan.php');    
            }elseif(isset($_POST['searchbtn'])){
                include('modules/right/search.php');
            }else
                include('modules/right/tatcahanghoa.php');
            
            
        ?>
    
    
</div>
<div class="clear"></div>