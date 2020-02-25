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

$category_id = $_POST['category_select'];
$material_id = $_POST['material_select'];
$info_name = $_POST['info_name'];
$info_desc = $_POST['info_desc'];




$query = "INSERT INTO `information`(`name`, `description`, `cat_id`, `material_id`)  VALUES ('$info_name',' $info_desc ','$category_id','$material_id')";


$result = $conn->query($query);

if($result) {
    header('Location: ../admin/addInfo.php');
    $_SESSION['success'] = 'The '. $info_name .' added successfully ';

}
else {
    $_SESSION['Error'] = "An error has occurred, please make sure that all field filled correctly";
    header('Location: ../sign_in.php');
}

?>
