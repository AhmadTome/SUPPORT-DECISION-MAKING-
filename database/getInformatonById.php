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

$id = $_GET['id'];

$query = "SELECT * FROM `information` WHERE `id` = '".$id."'";


$result = $conn->query($query);

if ($result->num_rows > 0) {
    $info = [];
    while ($row = $result->fetch_assoc()) {
        array_push($info,
            ["id" => $row["id"],
                "description" => $row["description"],
                "name" => $row["name"]
            ]);
    }
    $info = json_decode(json_encode($info), true);
    echo json_encode($info);
    //echo $sl_number;
} else {
    header('Location: ../sign_in.php');
}
?>
