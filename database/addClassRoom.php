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

$class_name = $_POST['class_name'];
$department = $_POST['department'];




$query = "INSERT INTO `class_room`(`name`, `department`) VALUES ('$class_name',' $department ')";


$result = $conn->query($query);

if($result) {
    header('Location: ../admin/addClassRoom.php');
    $_SESSION['success'] = 'The '. $class_name .' added successfully ';

}
else {
    $_SESSION['Error'] = "An error has occurred, please make sure that all field filled correctly";
    header('Location: ../sign_up.php');
}
?>
