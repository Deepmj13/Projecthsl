<?php
include 'connection.php';
include 'login-page.php';

// if($_SESSION['loggedin'] == false){
//     header("localtion:login-page.php");
// }
?>
<section class="hero">
    <nav class="navbar">
        <h2 class="name">Hello<?php echo $_SESSION['email']?></h2>
    <span class="navlist">
        <a href="http://">Home</a>
        <a href="http://">Booking</a>
        <a href="http://">Cargo</a>
        <a href="http://">Log out</a>
    </span>
    </nav>
</section>