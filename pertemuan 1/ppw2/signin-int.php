<?php
    session_start();
    $_SESSION['username'] = '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Sign In</h1>

    <form action='signin.php' method='post'>
        <label for="username">Username</label>
        <input type="text" name="username" id="username" maxlength="50"><br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password"><br>
        <input type="submit" value="Sign In" name='signin'>
    </form>

    <hr>
</body>
</html>

