<?php
include '../admin/connection.php';


if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password']; // $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hash the password
    $product = $_POST['product'];
    $weight = $_POST['weight'];
    $fromplace = $_POST['fromplace'];
    $toplace = $_POST['toplace'];
    $dateo = $_POST['date'];

    if(empty($name) || empty($email) || empty($password) || empty($product) || empty($weight) || empty($fromplace) || empty($toplace)|| empty($dateo)){
        echo "Please fill all the fields";
    }else{
    $sql="insert into `seaorder` (name,email,password,product,weight,fromplace,toplace,odate) values('$name','$email','$password','$product','$weight','$fromplace','$toplace','$dateo')";

    $result=mysqli_query($conn,$sql);
    if($result){
        echo '<script>alert("Booked successfully");</script>';
    }else{
        die(mysqli_error($conn));
    }
}
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="hero">
            <div class="text flex">
                <h1>
                    Book Now
                </h1>
                <span class="inner-text">For Reliable and Secure Service</span>
            </div>
            <div class="form-container flex">
                <form method="post">
                    <input type="text" name="name" placeholder="Name">
                    <input type="email" name="email" placeholder="Email">
                    <input type="password" name="password" placeholder="Password">
                    <input type="text" name="product" placeholder="Product">
                    <input type="text" name="weight" placeholder="Weight">
                    <input type="text" name="fromplace" placeholder="From">
                    <input type="text" name="toplace" placeholder="To">
                    <input type="date" name="date"><br>
                    <button type="submit" name="submit">Book</button>
                </form>
            </div>
    </section>
</body>
</html>