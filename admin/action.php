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

if(isset($_POST['done'])){
    $userid = $_POST['done'];

    $query = "select * from userorder where id='$userid'";
    $result = mysqli_query($conn,$query);

    $row = mysqli_fetch_array($result);

    $name =$row['name'];
    $email =$row['email'];
    $product =$row['product'];
    $weight =$row['weight'];
    $fromplace =$row['placefrom'];
    $toplace =$row['placeto'];
    $date =$row['date'];

    $sql="insert into `complete_order` (name,email,product,weight,placefrom,placeto,date) values('$name','$email','$product','$weight','$fromplace','$toplace','$date')";

    $result=mysqli_query($conn,$sql);
    if($result){
        echo "Data inserted successfully !";
    }else{
        die(mysqli_error($conn));
    }
    
    $query = "delete from userorder where id='$userid'";
    $result = mysqli_query($conn,$query);
    if($result){
        header('location: admin-panel.php');
    }else{
        die("failed");
    }

}
?>

