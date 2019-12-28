<?php 
	date_default_timezone_set("Asia/Ho_Chi_Minh");
	if(isset($_SESSION['id_them_vao_gio']))
	{
		$ten_nguoi_mua=trim($_POST['ten_nguoi_mua']);
		$dien_thoai=trim($_POST['dien_thoai']);
		$dia_chi=trim(nl2br($_POST['dia_chi']));
		$MSHH=
		$max_id="SELECT MAX(CAST(MSKH AS INT)) AS maxid FROM khachhang ";
			$max_result=mysql_query($max_id);
			if(mysql_num_rows($max_result)>0){
				while($row_max=mysql_fetch_assoc($max_result)){
					if($row_max['maxid'] == "")
						$maxid=0;
					else
						$maxid = intval($row_max['maxid']) +1 ;
				}
			}
		if($ten_nguoi_mua!="" and $dien_thoai!="" and $dia_chi!="")
		{
			$hang_duoc_mua="";
			for($i=0;$i<count($_SESSION['id_them_vao_gio']);$i++)
			{
				$hang_duoc_mua=$hang_duoc_mua.$_SESSION['id_them_vao_gio'][$i]."[|||]".$_SESSION['sl_them_vao_gio'][$i]."[|||||]";
            }
			$tv="INSERT INTO khachhang (MSKH,HoTenKH,DiaChi,SoDienThoai)
            VALUES ('$maxid','$ten_nguoi_mua','$dia_chi','$dien_thoai')";
			mysql_query($tv);
			unset($_SESSION['id_them_vao_gio']);
			unset($_SESSION['sl_them_vao_gio']);
			header("location:index.php");
		}
		$max_sodon="SELECT MAX(CAST(SoDonDH AS INT)) AS maxsodon FROM dathang ";
			$max_result_sodon=mysql_query($max_sodon);
			if(mysql_num_rows($max_result_sodon)>0){
				while($row_sodon=mysql_fetch_assoc($max_result_sodon)){
					if($row_sodon['maxsodon'] == "")
						$maxsodon=0;
					else
						$maxsodon = intval($row_sodon['maxsodon']) +1 ;
				}
			}
			$sql_sodon="INSERT INTO dathang
            VALUES ('$maxsodon','$maxid','0','".date("Y-m-d G:i:s")."','Đang xử lí','$hang_duoc_mua')";
            mysql_query($sql_sodon);
	}
?>