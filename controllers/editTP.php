<?php
    session_start();
    include("../lib/connection.php");    
    
    if(!isset($_SESSION['username'])){
        header("Location: ../index.php");
    }
    
    if(isset($_REQUEST['id']) and $_REQUEST['id']!=""){
        $id = $_GET['id'];
        $sql = "SELECT * FROM truongphong WHERE id = $id";
        $query = mysqli_query($conn, $sql); 
        $row = mysqli_fetch_row($query);       
    }
    
?>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>   
    
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
                <div class="container">
                    <form action="xl_editTP.php" method="POST">
                        <div class="container" style="margin-top: 5%; font-size:20px">
                            <div class="form-group">
                                <h3 class="m-3">Sửa giảng viên</h3>
                                <div class="col ml-0 my-3">
                                    <input hidden type="text" name="editID" class="form-control" value="<?php echo $row[0]; ?>"> 
                                </div>
                                <div class="col ml-0 my-3">
                                    <label>Tên</label>
                                    <input type="text" name="editName" class="form-control" value="<?php echo $row[1]; ?>">
                                </div>
                                <div class="col ml-0 my-3">
                                    <label>Số điện thoại</label>
                                    <input type="text" name="editPhone" class="form-control" value="<?php echo $row[2]; ?>">
                                </div>
                                <div class="col ml-0 my-3">
                                    <label>Địa chỉ</label>
                                    <input type="text" name="editAdress" class="form-control" value="<?php echo $row[3]; ?>">
                                </div>
                                <div class="col ml-0 my-3">
                                    <label>Email</label>
                                    <input type="email" name="editEmail" class="form-control" value="<?php echo $row[4]; ?>">
                                </div>
                                <!-- <div class="col ml-0 my-3">
                                    <label>Chức vụ</label>
                                    <select name="role" class="form-control">
                                        <option value="<?php echo $row['5']; ?>" hidden><?php echo $row['5']; ?></option>
                                        <option value="Giang vien">Giang vien</option>
                                        <option value="Trưởng phòng">Truong phong</option>
                                    </select>
                                </div> -->
                                <div class="col ml-0 my-3">
                                    <label>Bộ môn</label>
                                    <select name="nganh" class="form-control">
                                    <option value="<?php echo $row['6']; ?>" hidden><?php echo $row['6']; ?></option>
                                        <option value="CNTT">CNTT</option>
                                        <option value="Cơ khí">Cơ khí</option>
                                        <option value="Công trình">Công trình</option>
                                        <option value="Kinh tế">Kinh tế</option>
                                        <option value="Kế toán">Kế toán</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary" style="margin-left: 12px">Sửa</button>                       
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
