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


$sl_number = $_POST['sl_number'];
$name = $_POST['name'];

$query = "DELETE FROM `users` WHERE `number`= '".$sl_number."'";


$result = $conn->query($query);

if ($result) {
    $_SESSION['success'] = 'The '. $name .' deleted successfully ';
        header('Location: ../admin/delete.php');
}
?>
