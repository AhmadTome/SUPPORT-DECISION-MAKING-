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
$department = $_POST['department'];
$gradulation_year = $_POST['gradulation_year'];



$query = "INSERT INTO `users`
( `email`, `password`, `type`, `name`, `age`,
 `number`, `gender`, `level`, `degree`, `mobile_no`,
  `country`, `address`, `department`, `gradulation_year`) 
  VALUES ('$email',' $pwd ','$user_type','$fullname','$Bday','$number'
  ,'$gender','$level','$degree_program','$mobile_no','$country','$address','$department','$gradulation_year')";


$result = $conn->query($query);

if($result) {
    $_SESSION['user_email'] = $email;
    echo "Succesfully registered";
    if($user_type == "student"){
        $_SESSION['success'] = 'The account added successfully ';
        header('Location: ../admin/register.php');
    }

    if($user_type == "supervisor"){
        $_SESSION['success'] = 'The account added successfully ';
        header('Location: ../admin/registerSupervisor.php');
    }

    if($user_type == "sadmin"){
        $_SESSION['success'] = 'The account added successfully ';
        header('Location: ../admin/register_admin.php');
    }

}
else {
    $_SESSION['Error'] = "An error has occurred, please make sure that all field filled correctly";
    header('Location: ../sign_in.php');
}
?>
