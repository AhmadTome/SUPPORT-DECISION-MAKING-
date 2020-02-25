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

$fullname = $_POST['fullname'];
$user_type = $_POST['user_type'];
$number = $_POST['number'];
$Bday = $_POST['Bday'];
$gender = $_POST['gender'];
$level = $_POST['level'];
$degree_program = $_POST['degree_program'];
$email = $_POST['email'];
$mobile_no = $_POST['mobile_no'];
$country = $_POST['country'];
$address = $_POST['address'];
$pwd = $_POST['pwd'];

$query = "UPDATE `users` SET 
`email`='". $email ."',
`password`='". $pwd ."',`type`='". $user_type ."',
`name`='". $fullname ."',`age`='". $Bday ."',`gender`='". $gender ."',
`level`='". $level ."',`degree`='". $degree_program ."',
`mobile_no`='". $mobile_no ."',`country`='". $country ."',
`address`='". $address ."' WHERE `number` ='". $number ."'";


$result = $conn->query($query);

if($result) {
    echo "Succesfully Updated!";
    if($user_type == "student" || $user_type == "supervisor"){
        header('Location: ../admin/edit_info.php');
        echo 'supervisor or student';
        $_SESSION['success'] = 'The '. $user_type .' Information Updated successfully ';
    }

}
else {
    $_SESSION['Error'] = "An error has occurred, please make sure that all field filled correctly";
    header('Location: ../sign_in.php');
}
?>
