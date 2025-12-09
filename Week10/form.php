<?php 
    session_start();
    if(isset($_SESSION['isLoggedIn']) AND $_SESSION('isLoggedIn'))
    {
        header("Location: form.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>
        login
    </h1>
    <form action="login.php" method="post">
        username : <input type="text" name="uname" id=""><br>
        password : <input type="password" name="pwd" id=""><br>
        <input type="submit" value="simpan">
    </form>
</body>
</html>