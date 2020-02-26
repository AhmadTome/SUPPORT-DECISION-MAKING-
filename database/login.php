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

$username = $_POST['username'];
$pwd = $_POST['pwd'];



$query = "select * from  `users` where email = '".$username."' and password=".$pwd;
echo $query;
$result = $conn->query($query);
if ($result->num_rows > 0) {
    $_SESSION['user_email'] = $username;
    $row = $result->fetch_assoc();

    $_SESSION['user_type'] = $row['type'];
    if ($row['type'] == 'sadmin') {
        header('Location: ../admin/addCategory.php');
    } else if ($row['type'] == 'supervisor') {
        header('Location: ../supervisor/editPersonalInfo.php');
    }else if ($row['type'] == 'student') {
        header('Location: ../student/editPersonalInfo.php');
    } else {
        $_SESSION['Error'] = "There is no match, please make sure your email or password is correct";

        header('Location: ../sign_in.php');
    }
}else{
    $_SESSION['Error'] = "There is no match, please make sure your email or password is correct";

    header('Location: ../sign_in.php');
}
?>
