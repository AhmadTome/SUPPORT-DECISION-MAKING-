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

$cat_name = $_POST['cat_name'];
$cat_desc = $_POST['cat_desc'];




$query = "INSERT INTO `category`(`name`, `description`) VALUES ('$cat_name',' $cat_desc ')";


$result = $conn->query($query);

if($result) {
        header('Location: ../category/addCategory.php');
        $_SESSION['success'] = 'The '. $cat_name .' added successfully ';

}
else {
    $_SESSION['Error'] = "An error has occurred, please make sure that all field filled correctly";
    header('Location: ../sign_up.php');
}
?>