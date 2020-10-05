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
   $nguyenvong        = $_POST['nguyenvong'];
   $toan              = $_POST['toan'];
   $van               = $_POST['van'];
   $anh               = $_POST['anh'];
   $vatly             = $_POST['vatly'];
   $hoa               = $_POST['hoa'];
   $sinh              = $_POST['sinh'];
   $su                = $_POST['su'];
   $dia               = $_POST['dia'];
   $GDCD              = $_POST['GDCD'];
   $anhthe            = $_POST['anhthe'];
   $hocba             = $_POST['hocba'];


   $sql = "INSERT INTO `thisinh`(  `ho`, `ten`, `ngay_sinh`, `CMND`, `gioi_tinh`, `SDT`, `email`, `khuvuc`, `doituong`, `tinh_thuong_tru`, `quan_huyen_thuong_tru`, `phuong_xa_thuong_tru`, `dia_chi_thuong_tru`, `tinh_tam_tru`, `quan_huyen_tam_tru`, `phuong_xa_tam_tru`, `dia_chi_tam_tru`, `truong_lop_12`, `ma_truong_lop_12`, `ma_tinh_lop_12`, `hanh_kiem_lop_12`, `hoc_luc_lop_12`, `nam_tot_nghiep`, `nguyen_vong`, `toan`, `van`, `anh`, `vat_ly`, `hoa`, `sinh`, `su`, `dia_ly`, `GDCD`, `hinh_anh`, `hoc_ba`) VALUES ('$ho', '$ten', '$ngaysinh',$CMND,'$gioitinh','$SDT','$email','$khuvucuutien','$doituonguutien','$thanhphothuongtru','$quanhuyenthuongtru','$phuongxathuongtru','$diachithuongtru','$thanhphotamtru','$quanhuyentamtru','$phuongxathuongtru','$diachitamtru','$truong12',$matruonglop12,$matinhlop12,'$hanhkiemlop12','$hocluclop12',$namtotnghiep ,'$nguyenvong',$toan,$van,$anh,$vatly,$hoa,$sinh,$su,$dia,$GDCD,'$anhthe','$hocba')";
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