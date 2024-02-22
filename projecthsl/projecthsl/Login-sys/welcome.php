<?php
session_start();

if(!isset($_SESSION['loggedin'])){
    header("location: login-page.php");

    exit;
}
if(isset($_POST['submit'])){
    $_SESSION = array();
    session_destroy();
    header("location: login-page.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome User</title>
</head>
<body>
   <section class="hero">
    <nav class="navbar">
            <h2 class="name">
                Hello, <?php echo $_SESSION['name'];?>
            </h2>
            <span class="navlist">
                <a href="http://">Home</a>
                <a href="http://">Booking</a>
                <a href="http://">Services</a>
                <form method="post">
                    <button type="submit" name="submit">Logout</button>
                </form>
            </span>
    </nav>
   </section>
</body>
</html>


<!--  -->