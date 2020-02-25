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

$id = $_POST['Information_select'];
$info_name = $_POST['info_name'];


$query = "DELETE FROM `information` WHERE  `id`= '".$id."'";


$result = $conn->query($query);

if ($result) {
    $_SESSION['success'] = 'The '. $info_name .' deleted successfully ';
    header('Location: ../admin/deleteInfo.php');
}
?>
