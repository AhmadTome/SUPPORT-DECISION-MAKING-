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



$mat_id = $_POST["material_select"];
$mat_name = $_POST["mat_name"];

$query = "DELETE FROM `material` WHERE `id`= '".$mat_id."'";


$result = $conn->query($query);

if ($result) {
    $_SESSION['success'] = 'The '. $mat_name .' deleted successfully ';
    header('Location: ../Material/deleteMaterial.php');
}
?>