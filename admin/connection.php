<?php
    $conn = new mysqli('localhost','root','','tableone');

    if(!$conn){
        die(mysqli_error($conn));
    }
?>