<?php

include 'connection.php';

if(isset($_POST['submit'])){
    $un = $_POST['username'];
    $pass = $_POST['password'];
    
    $sql = "select * from admin where username='$un' and password='$pass'";
    $result = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result);
    $row = mysqli_fetch_array($result);
    if($num == 1){
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['name'] = $row['name'];
    echo $_SESSION['name'];
        header('location:admin-panel.php');
    }
    else{
        echo'<script>alert("Username or Password Doesnt match ")</script>';
    }


}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="loginstyle.css">
</head>
<body>
    <section class="container">
        <div class="content">
        <form method="post">
            <h1>Adminstrative</h1>
            <span>
            <input type="text" name="username" placeholder="username">
            <input type="password" name="password" placeholder="password">
            <button type="submit" name="submit">Login</button>
            </span>
        </form>
        <div class="secondpart">
            <img src="logo.png">
            <span class="text">
                remember we have responsibility not load
            </span>
        </div>    
    </div>
    </section>
</body>
</html>