<?php
    session_start();
    //include("../view/tracuu.html");
    include("../lib/connection.php");
    
    // if(!isset($_SESSION['username'])){
    //     header("Location: ../index.php");
    // }
    $sql = "SELECT * FROM giangvien";
    $sql1 = "SELECT * FROM truongphong";
    $query = mysqli_query($conn, $sql);
    $query1 = mysqli_query($conn, $sql1);

    if (mysqli_num_rows($query) > 0) {
?>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script>
        function myFunction() {
        // Declare variables
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");

        // Loop through all table rows, and hide those who don't match the search query
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }

        $(document).ready(function(){
            $("select").change(function(){
            // Declare variables
            var input, filter, table, tr, td, i, txtValue, selectedValue;
            selectedValue = $(this).children("option:selected").val();
            filter = selectedValue.toLowerCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
        // Loop through all table rows, and hide those who don't match the search query
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[5];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toLowerCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
            });
        });
        

        function redirThemGV(){
            location.assign("themGV.php");
        }
        function redirThemTP(){
            location.assign("themTP.php");
        }

        
    </script>
    <style>
        html{
            overflow:scroll;
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title></title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">    
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0">
                <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                
                <div class="sidebar-brand-icon rotate-n-15"></div>
                <div class="sidebar-brand-text mx-3"><span>Quản lý nhân sự</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="nav navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="home.php"><i class="fas fa-tachometer-alt"></i><span >&nbsp;TRANG CHỦ</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="tracuu.php"><i class="fas fa-tachometer-alt"></i><span >&nbsp;TRA CỨU THÔNG TIN</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="mail.php"><i class="fas fa-tachometer-alt"></i><span >&nbsp;MAIL</span></a></li>
                    <?php
                        if($_SESSION['phanquyen'] == 0){
                            echo "<li class='nav-item' role='presentation' id='lichsu'><a class='nav-link active' href='lichsu.php'><i class='fas fa-tachometer-alt'></i><span >&nbsp;LỊCH SỬ</span></a></li>";  
                        }
                    ?>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="contact.php"><i class="fas fa-tachometer-alt"></i><span >&nbsp;HỖ TRỢ</span></a></li>
                </ul>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <img src="../img/unnamed.jpg" alt="" style="width:100px; height:60px">
                    <h3  class="ml-3">Đại Học Thủy Lợi</h3>
                </nav>
    
    <!-- navbar -->
    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">QLNS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="home.php">Trang chủ <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tracuu.php">Tra cứu giảng viên</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Quản lí hồ sơ</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
            <label class="nav-link right"> Xin chào <?php echo $_SESSION['username']?></label>
            <a href="../controllers/logout.php" class="nav-link pull-right">Đăng xuất</a>
            </form>
        </div>
    </nav> -->

                <div class="container-fluid" style="margin-top: 5%">
                    <div class="form-group">
                        <!-- <button style="float:right; width: 200px" class="btn btn-primary m-2 form-control" onclick="redirThemTP()">Thêm trưởng phòng</button> -->
                        <button style="float:right; width: 150px" class="btn btn-primary m-2 form-control" onclick="redirThemGV()">Thêm nhân sự</button>
                        <select id="role" class="m-2 form-control" style="float:right; width: 210px">
                            <option value="" disable selected hidden>Tìm kiếm theo chức vụ</option>
                            <option value=""></option>
                            <option value="Giảng viên">Giảng viên</option>
                            <option value="Trưởng phòng">Trưởng phòng</option>
                        </select>
                        <input type="search" name="" id="myInput" onkeyup="myFunction()" style="float:right; width: 200px" class=" m-2 form-control" placeholder="Tìm kiếm theo họ tên">
                    </div>
                    <table class="table table-bordered" id="myTable" style="font-size:20px">
                        <thead>
                            <tr>
                                <th style="text-align:center">ID</th>
                                <th style="text-align:center">Họ Tên</th>
                                <th style="text-align:center">Số Điện Thoại</th>
                                <th style="text-align:center">Địa Chỉ</th>
                                <th style="text-align:center">Email</th>
                                <th style="text-align:center">Chức vụ</th>
                                <th style="text-align:center">Bộ môn</th>
                                <th style="text-align:center" colspan="2">Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>
                    <?php while($row = mysqli_fetch_assoc($query)) { ?>
                            <tr>
                                <td style="text-align:center"><?php echo $row['ID'] ?></td>
                                <td style="text-align:left"><?php echo $row['Hoten'] ?></td>
                                <td style="text-align:right"><?php echo $row['SDT'] ?></td>
                                <td style="text-align:left"><?php echo $row['Diachi'] ?></td>
                                <td style="text-align:left"><?php echo $row['email'] ?></td>
                                <td style="text-align:left"><?php echo $row['chucvu'] ?></td>
                                <td style="text-align:left"><?php echo $row['bomon'] ?></td>
                                <td style="text-align:center"><a href="editGV.php?id=<?php echo $row['ID']; ?>">Sửa</a></td>
                                <td style="text-align:center"><a href="deleteGV.php?id=<?php echo $row['ID']; ?>" onclick="if (!confirm('Bạn có chắc chắn muốn xóa bản ghi này không?')) { return false }">Xóa</a></td>
                            </tr>
                    <?php
                            }
                        } else {
                            error_reporting(0);
                            include("home.php");
                            echo "Không còn giảng viên trong database!";
                        };                        
                        mysqli_close($conn);
                    ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
