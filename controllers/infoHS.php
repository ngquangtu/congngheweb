<?php
   include("../lib/connection.php");
   include("header.php");  
 $ho                = $_GET['id'];

 $sql = "SELECT  * FROM thisinh WHERE id ='$ho'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr>
    <td>".$row['ho']."</td>
    <td>".$row['ten']."</td>
    <td>".$row['CMND']."</td>
    <td><a href='xemHS.php?id=".$row['id']."'>Xem</a></td>

    <td><a href='xl_editHS.php?id=".$row['id']."'>Sửa</a></td>
    <td><a href='xl_deleteHS.php?id=".$row['id']."'  onclick=\"if (!confirm('Bạn có chắc chắn muốn xóa bản ghi này không?')) { return false }\">Xóa</a></td>
  </tr>";
  }
} 
     
 $conn->close();
 ?>


<h2>Thông Tin Hồ Sơ</h2>

  <div  style="padding-left : 150px; padding-right:150px;"class="info">
    <div class="row">
    <div class="col-md-8  ">

    <h3 class="float-left">Nguyễn Tiến Đạt</h3>

    <table class="if">
        <tr>
          <th>Ngày Sinh :</th>
          <td>22/09/1999</td>
        </tr>
        <tr>
          <th>Giới tính :</th>
          <td>Nam</td>
        </tr>
        <tr>
          <th>CMND :</th>
          <td>071045737</td>
        </tr>
        <tr>
          <th>SDT :</th>
          <td>0837561353</td>
        </tr>
        <tr>
          <th>Email :</th>
          <td>datnt72@wru.vn</td>
        </tr>
        <tr>
          <th>Địa chỉ thường trú :</th>
          <td>22/09/1999</td>
        </tr>
        <tr>
          <th>Địa chỉ tạm trú :</th>
          <td>22/09/1999</td>
        </tr>
        <tr>
          <th>Khu vực :</th>
          <td>22/09/1999</td>
        </tr>
        <tr>
          <th>Đối tượng ưu tiên :</th>
          <td>22/09/1999</td>
        </tr>
    </table>

   <hr class="hr">
    <h5 class="float-left">Nguyện Vọng</h5>
    <table class="if-lop12">
        <tr>
          <th> Nguyện vọng 1 :</th>
          <td>Công Nghệ Thông Tin</td>
          <td>Đỗ</td>
        </tr>
        
    
    </table>

    <hr class="hr">
    <h5 class="float-left">Thông tin học tập lớp 12</h5>
    <table class="if-lop12">
        <tr>
          <th>Trường Lớp 12 :</th>
          <td>Tốt</td>
        </tr>
        <tr>
          <th>Mã trường 12 :</th>
          <td>Tốt</td>
        </tr>
        <tr>
          <th>Hạnh Kiểm :</th>
          <td>Tốt</td>
        </tr>
        <tr>
          <th>Học lực :</th>
          <td>Tốt</td>
        </tr>
    
    </table>
    <hr class="hr">
    <h5 class="float-left">Thông tin học tập</h5>
    <table class="if-diem">
        <tr>
          <th>Toán :</th>
          <td>9</td>
        </tr>
        <tr>
          <th>Văn :</th>
          <td>0</td>
        </tr>
        <tr>
          <th>Anh :</th>
          <td>0</td>
        </tr>
        <tr>
          <th>Vật Lý :</th>
          <td>9</td>
        </tr>
        <tr>
          <th>Hóa :</th>
          <td>6</td>
        </tr>
        <tr>
          <th>Sinh :</th>
          <td>2</td>
        </tr>
        <tr>
          <th>Sử :</th>
          <td>2</td>
        </tr>
        <tr>
          <th>Địa :</th>
          <td>2</td>
        </tr>
        <tr>
          <th>GDCD :</th>
          <td>2</td>
        </tr>
    </table>

    <hr class="hr">
    <h5 class="float-left">Điểm các khối xét tuyển</h5>
    <table class="if-lop12">
        <tr>
          <th>Khối A :</th>
          <td>Tốt</td>
        </tr>
        <tr>
          <th>Khối B :</th>
          <td>Tốt</td>
        </tr>
        <tr>
          <th>Khối C :</th>
          <td>Tốt</td>
        </tr>
        <tr>
          <th>Khối D :</th>
          <td>Tốt</td>
        </tr>
    
    </table>

    </div>
    <div class="col-md-4">
    <img src="https://static.topcv.vn/avatars/oN1zOKxZLyukjCPSIjVA_5f45830121ac5_cvtpl.jpg?1603005732" style="width:150px; margin-top:40px;" alt="">
     </div>
    </div>
  
  </div>



<?php
     include("footer.php");  

?>