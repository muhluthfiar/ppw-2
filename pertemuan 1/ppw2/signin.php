<?php

include 'config.php';

if (isset($_POST['signin'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        echo "success";
        session_start();

        $row = mysqli_fetch_array($result);
        $_SESSION['username'] = $row['username'];

        header('Location: welcome.php');
    } else {
        echo "Error: " . $query . "" . mysqli_error($conn);
    }
}

?>