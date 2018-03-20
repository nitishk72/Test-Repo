<?php
session_start();
if(isset($_SESSION["loggedin"])){
    header("Location: http://127.0.0.1/Hack/Dashboard?a=1");
    die();
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rajasthan";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM login where email='".$_POST['login_email']."' AND password='".md5($_POST['login_password'])."'";
$result = $conn->query($sql);

if ($result->num_rows < 2 && $result->num_rows > 0) {
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    header("Location: http://127.0.0.1/Hack/Dashboard?a=2");
} else {
    echo $sql."<br>";
    echo "0 results";
}
$conn->close();
?>