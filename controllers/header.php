<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="../assets/css/Dark-NavBar-1.css">
    <link rel="stylesheet" href="../assets/css/Dark-NavBar-2.css">
    <link rel="stylesheet" href="../assets/css/Dark-NavBar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="../assets/css/Pretty-Search-Form.css">
    <link rel="stylesheet" href="../assets/css/smoothproducts.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../assets/css/sua.css">
</head>
<script>
function myFunction() {
        var ho = document.getElementById("ho").value;
        var ten = document.getElementById("ten").value;
        var CMND = document.getElementById("CMND").value;
        var SDT = document.getElementById("SDT").value;
        var email = document.getElementById("email").value;
        var thanhphothuongtru = document.getElementById("thanhphothuongtru").value;
        var quanhuyenthuongtru = document.getElementById("quanhuyenthuongtru").value;
        var phuongxathuongtru = document.getElementById("phuongxathuongtru").value;
        var diachithuongtru = document.getElementById("diachithuongtru").value;
        var matruonglop12 = document.getElementById("matruonglop12").value;
        var truong12 = document.getElementById("truong12").value;
        var matinhlop12 = document.getElementById("matinhlop12").value;
        if (truong12 == null || ho == null ||ten == null ||  CMND == null || 
         SDT == null || email == null || thanhphothuongtru == null || quanhuyenthuongtru == null ||
         phuongxathuongtru == null || diachithuongtru == null || matruonglop12 == null || 
         matinhlop12 == null  ||
         truong12 == "" || ho == "" ||ten == "" || CMND == "" || 
         SDT == "" || email == "" || thanhphothuongtru == "" || quanhuyenthuongtru == "" ||
         phuongxathuongtru == "" || diachithuongtru == "" || matruonglop12 == "" || 
         matinhlop12 == "" 
         ) 
         {
             
             alert("Tên Môn không được để trống");
            return false;
        }
}
var nv = 1
function themnguyenvong() {
    nv++;
    if(nv<=3){
       
   
        $("#nguyenvong").append("<div class='col-md-4'><p style=' line-height: 3;'> Nguyện Vọng "+ nv +" :</p></div><div class='col-md-4'><select class='input-group input-by-me' name='nguyenvong"+ nv +"' id='cars'><option value='volvo'>Volvo</option><option value='saab'>Saab</option><option value='mercedes'>Mercedes</option><option value='audi'>Audi</option></select>  </div> <div class='col-md-4'></div>");
}
else{
    alert("Chỉ được tối đa 3 nguyện vọng");

}
   }


</script>
<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><img src="../assets/img/logo.png"><button data-toggle="collapse" class="navbar-toggler"
                data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span
                    class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"
                        style="padding: 0;height: 131px;margin-left: 30px;margin-top: -49px;margin-bottom: -149px;">
                        <form class="form-inline search-form">
                            <div class="input-group">
                               
                                <div class="input-group-append"> <a href="tracuuhoso.php"><button class="btn btn-light" type="button"
                                        style="background-color: rgb(27,51,170);color: rgb(255,255,255);">Tra cứu
                                    </button></a><a href="login.php"><input type="button" value="Đăng nhập"></a>
                                </div>
                            </div>
                            
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="main">
   <div class="container main-xethocba">
