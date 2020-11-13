<?php
    if(isset($_FILES["myfile"])==true){
        echo 'tồn tại';
    }
    else{
        echo 'koong tồn tại';
    }
    $uploads_dir = "upload/";
    foreach ($_FILES["myfile"]["error"] as $key => $error){
        if ($error == UPLOAD_ERR_OK) {
            $tmp_name = $_FILES["myfile"]["tmp_name"][$key];
                // basename() may prevent filesystem traversal attacks;
                // further validation/sanitation of the filename may be appropriate
            $name = basename($_FILES["myfile"]["name"][$key]);
            move_uploaded_file($tmp_name, "$uploads_dir/$name");
            $nameFile = "$uploads_dir/$name";
        }

    }


?>