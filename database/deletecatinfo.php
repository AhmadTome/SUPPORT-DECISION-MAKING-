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

$id = $_POST['category_select'];
$cat_name = $_POST['cat_name'];


$query = "DELETE FROM `category` WHERE  `id`= '".$id."'";


$result = $conn->query($query);

if ($result) {
    $_SESSION['success'] = 'The '. $cat_name .' deleted successfully ';
    header('Location: ../category/deletCategory.php');
}
?>