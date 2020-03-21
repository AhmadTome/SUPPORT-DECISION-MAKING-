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

$id = $_POST['sl_number'];
$info_name = $_POST['name'];


$query = "INSERT INTO `honer`(`name`, `user_number`) VALUES ('$info_name',' $id ')";

$result = $conn->query($query);

if($result) {
    header('Location: ../admin/addHoner.php');
    $_SESSION['success'] = 'The '. $info_name .' added successfully ';

}
else {
    $_SESSION['Error'] = "An error has occurred, please make sure that all field filled correctly";
    header('Location: ../sign_in.php');
}
?>
