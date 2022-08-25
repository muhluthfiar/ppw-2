
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <h1> Simple signup form</h1>
    <form action="signup.php" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" maxlength="50"><br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password"><br>

        <label for='address'>Address</label>
        <input type="text" name="address" id="address"><br>
        <label for='phone'>Phone</label>
        <input type="text" name="phone" id="phone"><br>
        <label for='email'>Email</label>
        <input type="text" name="email" id="email"><br>
        <input type="submit" value="Sign Up" name='signup'>
    </form>

    <hr>

    <a href='signin-int.php'>Sign In</a>

</body>
</html>