<?php
session_start();
include 'config.php';

if (isset($_POST['edit'])) {
    $username = $_SESSION['username'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $query = "UPDATE users
     SET password='$password', address='$address', phone='$phone', email='$email' WHERE username='$username'";

    $result = mysqli_query($conn, $query);
    if ($result) {
        echo "success";
        header('Location: welcome.php');
    } else {
        echo "Error: " . $query . "" . mysqli_error($conn);
    }
}

?>