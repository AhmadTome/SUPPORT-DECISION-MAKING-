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
$id = $_POST['category_select'];




$query = "UPDATE `category` SET `name`='". $cat_name ."',`description`='". $cat_desc ."' WHERE `id` = ".$id;


$result = $conn->query($query);

if($result) {
    echo "Succesfully Updated!";
        header('Location: ../category/editCategory.php');
        $_SESSION['success'] = 'The '. $cat_name .' Information Updated successfully ';
}
else {
    header('Location: ../sign_in.php');
}
?>