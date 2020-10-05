<?php
include("../storage/PHPMailer-master/src/PHPMailer.php");
include("../storage/PHPMailer-master/src/Exception.php");
include("../storage/PHPMailer-master/src/OAuth.php");
include("../storage/PHPMailer-master/src/POP3.php");
include("../storage/PHPMailer-master/src/SMTP.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

session_start();
error_reporting(0);
include("../lib/connection.php");
if(!isset($_SESSION['username'])){
    header("Location: ../index.php");
}
$sql = "SELECT email FROM giangvien";
$query = mysqli_query($conn, $sql);

$uploads_dir = '../uploads';
foreach ($_FILES["myfile"]["error"] as $key => $error) {
    if ($error == UPLOAD_ERR_OK) {
        $tmp_name = $_FILES["myfile"]["tmp_name"][$key];
            // basename() may prevent filesystem traversal attacks;
            // further validation/sanitation of the filename may be appropriate
        $name = basename($_FILES["myfile"]["name"][$key]);
        move_uploaded_file($tmp_name, "$uploads_dir/$name");
        $nameFile = "$uploads_dir/$name";
    }
}
if($_POST){
        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        $emailCC = $_POST['emailCC'];
        $emailBCC = $_POST['emailBCC'];
        try {
            //Server settings
            $mail->SMTPDebug = 0;                                 // Turn off display message
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'hieunn72@wru.vn';                 // SMTP username
            $mail->Password = 'Hieu301199';                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to
            $mail->CharSet = 'UTF-8';
            //Recipients
            $mail->setFrom('hieunn72@wru.vn','Joker');
            $mail->addAddress($_POST['emailTo']);     // Add a recipient
            //$mail->addAddress('ellen@example.com');               // Name is optional
            //$mail->addReplyTo('info@example.com', 'Information');
            $mail->addCC('hieunn72@wru.vn',$emailCC);
            $mail->addBCC('hieunn72@wru.vn',$emailBCC);

            //Attachments
            $mail->addAttachment($nameFile);         // Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $_POST['header'];
            $value1 = "";
            $value2 = "";
            if(!empty($_POST['chuki'])) {    
                foreach($_POST['chuki'] as $value){
                    // echo "value : ".$value.'<br/>';
                    $value1 = $value;
                }
            }
            if(!empty($_POST['template'])) {    
                foreach($_POST['template'] as $value){
                    // echo "value : ".$value.'<br/>';
                    $value2 = $value;
                }
            }
            $mail->Body    = $_POST['content'] . $value2 . $value1;
            //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo "<script type='text/javascript'>alert('Gửi thư thành công');</script>";
        } catch (Exception $e) {
            //echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
            echo "<script type='text/javascript'>alert('Gửi thư không thành công');</script>";
        }
    }
    ?>
    <html>

    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
        <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
        <script>
            $(document).ready(function(){
                $("#checkall").change(function(){
                    if($(this).prop("checked") == true){
                        $("#mailValue").val("<?php  
                            while($row = mysqli_fetch_assoc($query)){
                                echo  $row['email'] . ",";
                            }
                            ?>");

                    }
                    else if($(this).prop("checked") == false){
                        $("#mailValue").val("");
                    }
                });
            // $content = $("#content").val();
            // $chuki1 = $("#chuki1").val();
            // $contentchuki = $content + $chuki1;
            // $("#chuki1").change(function(){
            //     if($("#chuki1").prop("checked") == true){
            //         $("#content").val($contentchuki) ;

            //     }
            //     else if($(this).prop("checked") == false){
            //         $("#content").val("");
            //     }
            // });
        });
    </script>
    <style>
        .signature{
            margin-left: 2%;
        }
        .template{
            margin-left: 2%;
        }
        .sign {
            margin-top: 1%;
        }
        .temp {
            margin-top: 1%;
        }
    </style>
</head>

<body id="page-top">
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
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="#"><i class="fas fa-tachometer-alt"></i><span >&nbsp;MAIL</span></a></li>
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
            <div>
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                     <!-- <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <form class="form-inline d-none d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                            </div>
                        </form> 
                    </div> --> 
                    <img src="../img/unnamed.jpg" alt="" style="width:100px; height:60px">
                    <h3  class="ml-3 col-sm-11">Đại Học Thủy Lợi <a type="button" href="logout.php" class="float-right">Đăng xuất</a></h3>
                </nav> 
            </div>
            <div class="container-fluid">
                <form method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <h3 class="m-3">Gửi thư</h3>
                        <div class="col ml-0 my-3">
                            <label>Đến:</label>
                            <input type="text" id="mailValue" name="emailTo" class="form-control" value="">
                            <div class="form-check mt-3">
                                <input type="checkbox" id="checkall" class="form-check-input" value="">Gửi mail cho tất cả nhân sự                                    
                            </div>
                        </div>
                        <div class="col ml-0 my-3">
                            <label>CC:</label>
                            <input type="text" name="emailCC" class="form-control">
                        </div>
                        <div class="col ml-0 my-3">
                            <label>BCC:</label>
                            <input type="text" name="emailBCC" class="form-control">
                        </div>
                        <div class="col ml-0 my-3">
                            <label>Tiêu đề:</label>
                            <input type="text" name="header" class="form-control">
                        </div>
                        <div class="col ml-0 my-3">
                            <label>Nội dung:</label>
                            <!-- <input type="text" name="content" class="form-control"> -->
                            <textarea name="content" id="content" cols="30" rows="7" class="form-control"></textarea>
                           <!--  <div class="form-check mt-3">
                                <input type="checkbox" id="checkSign" class="form-check-input" value="">Chữ kí                                  
                            </div> -->
                            <!-- template chu ki-->
                            <p class="sign"> Chọn chữ kí : </p>
                            <div class="sign">
                                <input class="signature" type="radio" name="chuki" value="sign1">&nbsp;Tung
                                <input class="signature" type="radio" name="chuki" value="sign2">&nbsp;Hieu
                                <input class="signature" type="radio" name="chuki" value="sign3">&nbsp;Trang
                                <input class="signature" type="radio" name="chuki" value="sign4">&nbsp;Ha
                            </div>
                            <!-- template mail -->
                            <p class="temp"> Chọn template mail : </p>
                              <div class="temp">
                                <input class="template" type="radio" name="template" value="content1">&nbsp;Thư Mời 
                                <input class="template" type="radio" name="template" value="content2">&nbsp;Thông báo trúng tuyển
                                <input class="template" type="radio" name="template" value="content3">&nbsp;Cảnh báo học vụ
                                <input class="template" type="radio" name="template" value="content4">&nbsp;Danh sách học bổng
                            </div>

                        </div>
                        <!-- attachment -->
                        <div class="col ml-0">
                            <form action="mail.php" enctype="multipart/mixed">
                                <label for="myfile">Chọn file đính kèm: </label>
                                <input type="file" id="myfile" name="myfile[]" multiple><br><br>
                            </form>
                        </div>

                        <button type="submit" class="btn btn-primary">Gửi thư</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>

