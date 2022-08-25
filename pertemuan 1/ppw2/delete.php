<?php
session_start();
include 'config.php';

$username = $_SESSION['username'];

$query = "DELETE from users WHERE username = '$username' ";


if (mysqli_query($conn, $query)) {
    echo "success";
    session_start();
    session_unset();
    session_destroy();
    header('Location: simpleloginform.php');
} else {
    echo "Error: " . $query . "" . mysqli_error($conn);
}

?>