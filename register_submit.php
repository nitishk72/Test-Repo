<?php
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "rajasthan";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "INSERT INTO login (email, password)
    VALUES ('".$_POST['register_email']."', '".md5($_POST['register_password'])."')";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        echo "New record created successfully";
    } else if (mysqli_errno($conn) == 1062) {
        
    }else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>