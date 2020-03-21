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

$school_name = $_POST['school_name'];
$numberOfStudent = $_POST['numberOfStudent'];
$semester = $_POST['semester'];
$year = $_POST['year'];




$query = "INSERT INTO `visit`(`school_name`, `numberOfStudent`, `year`, `semester`) VALUES  ('$school_name',' $numberOfStudent ',' $year ',' $semester ')";


$result = $conn->query($query);

if($result) {
    header('Location: ../admin/StudentVisit.php');
    $_SESSION['success'] = 'The Visit added successfully ';

}
else {
    $_SESSION['Error'] = "An error has occurred, please make sure that all field filled correctly";
    header('Location: ../sign_up.php');
}
?>
