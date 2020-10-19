<?php
   include("../lib/connection.php");
   include("header.php");  
   $ho                = $_POST['ho'];
   $ten               = $_POST['ten'];
   $ngaysinh          = $_POST['ngaysinh'];
   $CMND              = $_POST['CMND'];
   $gioitinh          = $_POST['gioitinh'];
   $SDT               = $_POST['SDT'];
   $email             = $_POST['email'];
   $khuvucuutien      = $_POST['khuvucuutien'];
   $doituonguutien    = $_POST['doituonguutien'];
   $thanhphothuongtru = $_POST['thanhphothuongtru'];
   $quanhuyenthuongtru= $_POST['quanhuyenthuongtru'];
   $phuongxathuongtru = $_POST['phuongxathuongtru'];
   $diachithuongtru   = $_POST['diachithuongtru'];
   
   if(isset($_POST['liketop'])){
      $diachitamtru=$diachithuongtru;
      $thanhphotamtru=$thanhphothuongtru;
      $quanhuyentamtru=$quanhuyenthuongtru;
      $phuongxatamtru=$phuongxathuongtru;
   }
   else{
      $thanhphotamtru    = $_POST['thanhphotamtru'];
      $quanhuyentamtru   = $_POST['quanhuyentamtru'];
      $phuongxatamtru    = $_POST['phuongxatamtru'];
      $diachitamtru      = $_POST['diachitamtru'];
   }
  
   $truong12          = $_POST['truong12'];
   $matruonglop12     = $_POST['matruonglop12'];
   $matinhlop12       = $_POST['matinhlop12'];
   $hanhkiemlop12     = $_POST['hanhkiemlop12'];
   $hocluclop12       = $_POST['hocluclop12'];
   $namtotnghiep      = $_POST['namtotnghiep'];
   $nguyenvong1        = $_POST['nguyenvong1'];
   $nguyenvong2=null;
   $nguyenvong3=null;
   if(isset($_POST['nguyenvong2'])){
      $nguyenvong2        = $_POST['nguyenvong2'];
   }
   if(isset($_POST['nguyenvong3'])){
      $nguyenvong3        = $_POST['nguyenvong3'];
   }
 
 
   $toan              = $_POST['toan'];
   $van               = $_POST['van'];
   $anh               = $_POST['anh'];
   $vatly             = $_POST['vatly'];
   $hoa               = $_POST['hoa'];
   $sinh              = $_POST['sinh'];
   $su                = $_POST['su'];
   $dia               = $_POST['dia'];
   $GDCD              = $_POST['GDCD'];
  


   if(isset($_FILES["anhthe"])==true){
      echo 'tồn tại';
  }
  else{
      echo 'koong tồn tại';
  }
  $uploads_dir1 = "../upload";
  foreach ($_FILES["anhthe"]["error"] as $key => $error){
      if ($error == UPLOAD_ERR_OK) {
          $tmp_name1 = $_FILES["anhthe"]["tmp_name"][$key];
              // basename() may prevent filesystem traversal attacks;
              // further validation/sanitation of the filename may be appropriate
          $name1 = basename($CMND.'anhthe.jpg');
          move_uploaded_file($tmp_name1, "$uploads_dir1/$name1");
          $nameFile1 = "$uploads_dir1/$name1";
       echo $nameFile1 ;

      }

  }
  if(isset($_FILES["hocba"])==true){
   echo 'tồn tại';
}
else{
   echo 'koong tồn tại';
}
$uploads_dir2 = "../upload";
foreach ($_FILES["hocba"]["error"] as $key => $error){
   if ($error == UPLOAD_ERR_OK) {
       $tmp_name2 = $_FILES["hocba"]["tmp_name"][$key];
           // basename() may prevent filesystem traversal attacks;
           // further validation/sanitation of the filename may be appropriate
       $name2 = basename($CMND.'hocba.pdf');
       move_uploaded_file($tmp_name2, "$uploads_dir2/$name2");
       $nameFile2 = "$uploads_dir2/$name2";
       echo $nameFile2 ;
   }

}


   $sql = "INSERT INTO `thisinh`(  `ho`, `ten`, `ngay_sinh`, `CMND`, `gioi_tinh`, `SDT`, `email`, `khuvuc`, `doituong`, `tinh_thuong_tru`, `quan_huyen_thuong_tru`, `phuong_xa_thuong_tru`, `dia_chi_thuong_tru`, `tinh_tam_tru`, `quan_huyen_tam_tru`, `phuong_xa_tam_tru`, `dia_chi_tam_tru`, `truong_lop_12`, `ma_truong_lop_12`, `ma_tinh_lop_12`, `hanh_kiem_lop_12`, `hoc_luc_lop_12`, `nam_tot_nghiep`, `nguyen_vong_1`,`nguyen_vong_2`,`nguyen_vong_3`, `toan`, `van`, `anh`, `vat_ly`, `hoa`, `sinh`, `su`, `dia_ly`, `GDCD`, `hinh_anh`, `hoc_ba`) VALUES ('$ho', '$ten', '$ngaysinh',$CMND,'$gioitinh','$SDT','$email','$khuvucuutien','$doituonguutien','$thanhphothuongtru','$quanhuyenthuongtru','$phuongxathuongtru','$diachithuongtru','$thanhphotamtru','$quanhuyentamtru','$phuongxathuongtru','$diachitamtru','$truong12',$matruonglop12,$matinhlop12,'$hanhkiemlop12','$hocluclop12',$namtotnghiep ,'$nguyenvong1','$nguyenvong2','$nguyenvong3',$toan,$van,$anh,$vatly,$hoa,$sinh,$su,$dia,$GDCD,'$nameFile2','$nameFile2')";
  if ($conn->query($sql) === TRUE) {
   echo "New record created successfully";
   } else {
   echo "Error: " . $sql . "<br>" . $conn->error;
    }
 
 $conn->close();

 ?>
    <h2> Nộp học bạ thành công </h2>
    <p style="text-">Kiểm tra mail từ 3-4 ngày để xác nhận nhập học</p>
 
 <?php
     include("footer.php");  

?>
<!-- $ho, $ten, $ngaysinh,$CMND,$gioitinh,$SDT,$email,$khuvucuutien,$doituonguutien,$thanhphothuongtru,$quanhuyenthuongtru
   ,$phuongxathuongtru,$diachithuongtru,$thanhphotamtru,$quanhuyentamtru,$phuongxathuongtru,$diachitamtru
   ,$truong12,$matruonglop12,$matinhlop12,$hanhkiemlop12,$hocluclop12,$namtotnghiep
   ,$nguyenvong,$toan,$van,$anh,$vatly,$hoa,$sinh,$su,$dia,$GDCD,$anhthe,$hocba -->