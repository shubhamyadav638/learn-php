<?php
// print_r($_FILES);
// print_r($_FILES['file_upload']); // file ke name check kar rahe hai ki available hai ya nahi 

if($_FILES['file_upload']){
    $path = $_FILES['file_upload']['name'];//image1.png path mil jayega

    $upload_path = "./uploads/".$path;// ./uploads/image1.png
    // echo $upload_path;

    // file upload ke liye
    if(move_uploaded_file($_FILES['file_upload']["tmp_name"], $upload_path)){
        echo "file uploaded";
    }else{
        die("failed to upload");
    }
    }else{
        die('no file found');
    }

?>