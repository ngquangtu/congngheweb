<?php
    session_start();
    include("../lib/connection.php");

    if(!isset($_SESSION['username'])){
        header("Location: ../index.php");
    }
    
    if($_POST){
        $id = $_POST['addID'];
        $ten = $_POST['addName'];
        $sdt = $_POST['addPhone'];
        $diachi = $_POST['addAdress'];
        $Email = $_POST['addEmail'];
        $role = "Trưởng phòng";
        $nganh = $_POST['nganh'];
        $sqlCheck = "SELECT * FROM truongphong WHERE id = '$id'";
        $check = mysqli_query($conn, $sqlCheck);
        $count = mysqli_num_rows($check);
        if($count ==  0){  
            $sql = "INSERT INTO truongphong(id,ten,sdt,diachi,email,chucvu,bomon) VALUES ($id,'$ten','$sdt','$diachi','$Email','$role','$nganh')";
            $query = mysqli_query($conn, $sql);
            $message = "Thêm thành công!";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }else{
            echo "<script type='text/javascript'>alert('ID đã tồn tại trong hệ thống');</script>";
        }
    }
?>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>   
    <script>
        $(document).ready(function(){
            var submit = $("button[type='submit']");
            
            submit.click(function(){
                var id = $("input[name='addID']").val();
                var ten = $("input[name='addName']").val();
                var sdt = $("input[name='addPhone']").val();
                var diachi = $("input[name='addAdress']").val();
                var email = $("input[name='addEmail']").val();
                
                if (id == '') {
                    alert('ID không được để trống');
                    return false;
                }
                if (ten == '') {
                    alert('Tên không được để trống');
                    return false;
                }
                if (sdt == '') {
                    alert('Số điện thoại không được để trống');
                    return false;
                }
                if (diachi == '') {
                    alert('Địa chỉ không được để trống');
                    return false;
                }
                if (email == '') {
                    alert('Email không được để trống');
                    return false;
                }
                
            })
        })
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
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
                <div class="container-fluid" style="margin-top: 5%; font-size:20px">
                    <form method="POST">
                        <div class="container">
                            <div class="form-group">
                                <h3 class="m-3">Thêm trưởng phòng</h3>
                                <div class="col ml-0 my-3">
                                    <label>ID</label>
                                    <input type="text" name="addID" class="form-control">
                                </div>
                                <div class="col ml-0 my-3">
                                    <label>Tên</label>
                                    <input type="text" name="addName" class="form-control">
                                </div>
                                <div class="col ml-0 my-3">
                                    <label>Số điện thoại</label>
                                    <input type="text" name="addPhone" class="form-control">
                                </div>
                                <div class="col ml-0 my-3">
                                    <label>Địa chỉ</label>
                                    <input type="text" name="addAdress" class="form-control">
                                </div>
                                <div class="col ml-0 my-3">
                                    <label>Email</label>
                                    <input type="email" name="addEmail" class="form-control">
                                </div>                                
                                <div class="col ml-0 my-3">
                                    <label>Bộ môn</label>
                                    <select name="nganh" class="form-control">
                                        <option value="CNTT">CNTT</option>
                                        <option value="Co khi">Co khi</option>
                                        <option value="Cong trinh">Cong trinh</option>
                                        <option value="Kinh te">Kinh te</option>
                                        <option value="Ke toan">Ke toan</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary" style="margin-left: 12px">Thêm</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>