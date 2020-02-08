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

$sl_number = $_GET['sl_number'];


$query = "SELECT * FROM `users` WHERE `number` = '".$sl_number."'";

$result = $conn->query($query);

if ($result->num_rows > 0) {
    $info = [];
    while ($row = $result->fetch_assoc()) {
        array_push($info,
            ["email" => $row["email"],
                "type" => $row["type"],
                "name" => $row["name"],
                "age" => $row["age"],
                "gender" => $row["gender"],
                "level" => $row["level"],
                "degree" => $row["degree"],
                "mobile_no" => $row["mobile_no"],
                "country" => $row["country"],
                "address" => $row["address"],
                "pwd" => $row["password"]
            ]);
    }
    $info = json_decode(json_encode($info), true);
    echo json_encode($info);
    //echo $sl_number;
} else {
    header('Location: ../sign_in.php');
}
?>
