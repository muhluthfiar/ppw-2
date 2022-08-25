<?php
include 'config.php';

if (isset($_POST['signup'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $insertdata = "INSERT INTO users (username, password, address, phone, email) 
    VALUES ('$username', '$password', '$address', '$phone', '$email')";

    if(mysqli_query($conn, $insertdata)) {

        echo('submit success');
        header('Location: simpleloginform.php');

    } else {
        echo "Error: " . $insertdata . "" . mysqli_error($conn);
    }
}


?>