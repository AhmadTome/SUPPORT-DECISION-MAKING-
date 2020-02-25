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

$info_name = $_POST['info_name'];
$info_description = $_POST['info_description'];
$id = $_POST['Information_select'];




$query = "UPDATE `information` SET `name`='". $info_name ."',`description`='". $info_description ."' WHERE `id` = ".$id;


$result = $conn->query($query);

if($result) {
    echo "Succesfully Updated!";
    header('Location: ../admin/editInf.php');
    $_SESSION['success'] = 'The '. $info_name .' Information Updated successfully ';
}
else {
    header('Location: ../sign_in.php');
}
?>
