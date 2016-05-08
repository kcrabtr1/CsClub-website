<?php
$target_dir = "uploads/profile/";
$target_file = $target_dir . basename($_FILES["uploadPic"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image


    $check = getimagesize($_FILES["uploadPic"]["tmp_name"]);
    if($check !== false) {
        //echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {

        $uploadOk = 0;
    }


// Check if file already exists
if (file_exists($target_file)) {
    alertMsg('Sorry, file already exists', 'alert-danger');
    $uploadOk = 0;
}
// Check file size
if ($_FILES["uploadPic"]["size"] > 2000000) {
    alertMsg('Sorry, your file is too large', 'alert-danger');
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif") {
    alertMsg('Sorry, only JPG, JPEG, PNG & GIF files are allowed.', 'alert-danger');
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    //echo "Sorry, your file was not uploaded.";
    $npic = 'img/default-profile.png';
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["uploadPic"]["tmp_name"], $target_file)) {
        $npic = $target_file;
        //echo "The file ". basename( $_FILES["uploadPic"]["name"]). " has been uploaded.";
    } else {
          alertMsg('Sorry, there was an error uploading your file', 'alert-danger');
    }
}
?>
