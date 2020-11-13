<?php include("lib/connection.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <select name="" id="pb">
        <?php
             $sql = "SELECT * FROM phongban";
             mysqli_set_charset($conn,'UTF-8');
             $query = mysqli_query($conn, $sql);
             while($row=mysqli_fetch_assoc($query)){
                 echo "   <option value='".$row['id']."'>".$row['tenphonfban']."</option>";
             }

        
        ?>
         
        </select>
        <select name="" id="nv">
            <option value="0">danh sách nhân viên</option>
        </select>
    
        <script src="jquery.min.js"></script>
        <script src="a.js"></script>
</body>
</html>