<?php

function dstc() {
    $sql = "SELECT  ho, ten , SDT FROM thisinh";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr>
    <td>".$row['ho']."</td>
    <td>".$row['ten']."</td>
    <td>".$row['SDT']."</td>
  </tr>";
  }
} 
     
  }
?>