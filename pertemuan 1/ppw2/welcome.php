<?php
include 'config.php';

session_start();
if($_SESSION['username']=='')
{
    header("location:simpleloginform.php");
}

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
    <h1> Welcome <?php echo $_SESSION['username']; ?> </h1>
    <h2>Data : </h2>

    <table border='1'>
        <tr>
            <th>Username</th>
            <th>Password</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Email</th>
        </tr>
        <?php
            $user = mysqli_query($conn,"SELECT * from users where username='$_SESSION[username]'");
            while($row = mysqli_fetch_array($user))
            {
                echo "<tr>";
                echo "<td>".$row['username']."</td>";
                echo "<td>".$row['password']."</td>";
                echo "<td>".$row['address']."</td>";
                echo "<td>".$row['phone']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "</tr>";
            }
        ?>
    </table>

    <hr>

    <h1>Edit Data</h1>
    <form action="edit.php" method="post">
        <label for="password">Password</label>
        <input type="password" name="password" id="password"><br>
        <label for='address'>Address</label>
        <input type="text" name="address" id="address"><br>
        <label for='phone'>Phone</label>
        <input type="text" name="phone" id="phone"><br>
        <label for='email'>Email</label>
        <input type="text" name="email" id="email"><br>
        <input type="submit" value="Edit" name='edit'>
    </form>



    <hr>
    <a href="logout.php">Logout</a>
    <hr>
    <form action="delete.php" method="post">
        <input type="submit" value="Delete" name='delete'>
    </form>
</body>