<?php
    session_start();
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    include("../lib/connection.php");
    if($_SESSION['phanquyen'] == 1){
        echo "Bạn không có quyền xóa vui lòng trở lại";
        return false;
    }   
    if(isset($_REQUEST['id']) and $_REQUEST['id']!=""){
        $name = $_SESSION['username'];
        $id = $_GET['id'];
        $sql1 = "SELECT * FROM giangvien WHERE ID = '$id'";
        $query1 = mysqli_query($conn, $sql1);
        $row1 = mysqli_fetch_row($query1); 
        $ten = $row1[1];
        $sdt = $row1[2];
        $diachi = $row1[3];
        $email = $row1[4];
        $chucvu = $row1[5];
        $bomon = $row1[6];
        $date = date("d/m/Y h:i:a");
        $sql2 = "INSERT INTO historydel(Hoten,SDT,Diachi,email,chucvu,bomon,thoigian,tacvu,nguoithuchien) VALUES ('$ten','$sdt','$diachi','$email','$chucvu','$bomon','$date','Xóa','$name')";
        $query2 = mysqli_query($conn, $sql2);
        $sql = "DELETE FROM giangvien WHERE giangvien.ID = '$id'";
        echo $id;
        if ($conn->query($sql) === TRUE) {
            header("Location: tracuu.php");
        } else {
            echo "Error updating record: " . $conn->error;
        }
         
        $conn->close();
    }