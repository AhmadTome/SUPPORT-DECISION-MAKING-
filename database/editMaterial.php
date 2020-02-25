<?php
session_start();
$servername = "localhost";
$username = "decision_making";
$password = "";

// Create connection
//$conn = mysqli_connect($servername, $username, $password);
$conn = mysqli_connect($servername, "root",$password, $username,"3306");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
mysqli_set_charset($conn,"utf8");


$mat_name = $_POST['mat_name'];
$mat_desc = $_POST['mat_desc'];
$mat_id = $_POST['material_select'];
$file = uploadfile();



if($file == "sorry"){
    $query = "UPDATE `material` SET `name`='". $mat_name ."',`description`='". $mat_desc ."' WHERE id = ".$mat_id;
}else{
    $query = "UPDATE `material` SET `name`='". $mat_name ."',`description`='". $mat_desc ."',`file`='". $file ."' WHERE id = ".$mat_id;
}



$result = $conn->query($query);

if($result) {
    echo "Succesfully Updated!";
    $_SESSION['success'] = 'The '. $mat_name .' Information Updated successfully ';
    header('Location: ../admin/editMaterial.php');
}
else {
    $_SESSION['Error'] = "An error has occurred, please make sure that all field filled correctly";
    header('Location: ../sign_in.php');
}





function uploadfile(){
    $target_dir = "../uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "sorry";
            $uploadOk = 0;
            return "sorry";
        }
    }
// Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "sorry";
        $uploadOk = 0;
        return "sorry";
    }
// Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        echo "sorry";
        $uploadOk = 0;
        return "sorry";
    }
// Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "sorry";
        return "sorry";
// if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
            return basename( $_FILES["fileToUpload"]["name"]);
        } else {
            echo "sorry";
            return "sorry";
        }
    }
}


?>
