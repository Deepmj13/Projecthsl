<?php
$con = new mysqli('localhost','root','','userregistration');

if(!$con){
    die(mysqli_error($con));
}

?>