<?php
include("lib/connection.php");
    if(isset($_POST['id'])){
        $id = $_POST['id'];
       
        $sql= "SELECT * FROM `nhanvien` WHERE `id`=$id";
        $result = mysqli_query($conn,$sql);

        while( $row = mysqli_fetch_array($result) ){
           $userid = $row['id'];
           $name = $row['ten'];
     
           $users_arr[] = array("id" => $userid, "ten" => $name);

        }
       
        echo json_encode($users_arr);
     
    }

?>