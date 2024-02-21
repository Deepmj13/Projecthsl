<?php
include 'connection.php';

if(isset($_POST['delete'])){
    
    $userid = $_POST['delete'];

    $query = "delete from userorder where id='$userid'";
    $result = mysqli_query($conn,$query);
    if($result){
        header('location: admin-panel.php');
    }else{
        die("failed");
    }
}

?>