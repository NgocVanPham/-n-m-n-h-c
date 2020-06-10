<?php
	require("../connect/connect.php");
	if(isset($_POST['btn_themloaisp'])){
		echo "Đã bấm nút thêm";
		if($_POST['txt_TenLoai']!=""){
			$tenLoai=$_POST['txt_TenLoai'];
			$trangThai = $_POST['txt_TrangThai'];
			
			$sql="INSERT INTO tbl_dmloai(IDLoai,TenLoai,TrangThai) VALUES(Null,'$tenLoai','$trangThai')";
			$row = mysqli_query($con,$sql);		
			header("location: index_admin.php?nc=dmloai");
		}else{
			echo "Bạn phải nhập tên hãng.";
		}
    }
    
    //code xóa sản phẩm
	if(isset($_GET["action"]))  
    {  
     if($_GET["action"] == "deleteloaisp")  
     {
         $id_item = $_GET["id"];
         $sql = "DELETE from tbl_dmloai where IDLoai=".$id_item."";
         $ketqua = mysqli_query($con,$sql);
         if($ketqua > 0){
                 echo '<script>window.location="index_admin.php?nc=dmloai"</script>';
         }
     }  
    }
   
   //code sửa HSX
   if(isset($_POST['btn_SuaLoaiSP']))
   {
           $tem_id = $_POST["txt_id"];
           $tenLoai_sua=$_POST['txt_TenLoai'];
           $trangthai_sua=$_POST['txt_TrangThai'];
           
       $sql_suahsx = "UPDATE tbl_dmloai SET TenLoai = '$tenLoai_sua', TrangThai = '$trangthai_sua' where IDLoai=".$tem_id."";
       $row = mysqli_query($con,$sql_suahsx);
       if($row>0){
        echo "
        <script language='javascript'>
                alert('Cập nhật thành công');
                window.open('index_admin.php?nc=dmloai','_self',3);
        </script>";
           
       } else
       {
        echo "
        <script language='javascript'>
                alert('Vui lòng nhập đầy đủ thông tin!');
        </script>";
       }
   }
?>