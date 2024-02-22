<?php
include 'connection.php';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password']; // $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hash the password
    $product = $_POST['product'];
    $weight = $_POST['weight'];
    $height = $_POST['height'];
    $width = $_POST['width'];
    $fromplace = $_POST['fromplace'];
    $toplace = $_POST['toplace'];
    $toplace = $_POST['toplace'];
    $dateo = $_POST['dateo'];

    if(empty($name) || empty($email) || empty($password) || empty($product) || empty($weight) || empty($height) || empty($width) || empty($fromplace) || empty($toplace)){
        echo "Please fill all the fields";
    }else{
    $sql="insert into `userorder` (name,email,password,product,weight,height,width,placefrom,placeto,date) values('$name','$email','$password','$product','$weight','$height','$width','$fromplace','$toplace','$dateo')";

    $result=mysqli_query($conn,$sql);
    if($result){
        echo "Data inserted successfully !";
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

    <style>

*{
    margin:0;padding:0;
    box-sizing: border-box;
    text-decoration: none;list-style: none;
    font-family: 'Courier New', Courier, monospace;
}
.hero{
    width:100%;
    height: 100vh;
    background:#111;
    display:flex;
    align-items: center;
    padding:1rem;
}
.container{
    background:rgba(255, 255, 255, 0.7);
    height: 60vh;width: 100%;
    display: flex;
    align-items:center;
    border-radius:10px;

}

    </style>

</head>
<body>
    <section class="hero">
        <div class="container">
            <form  method="post">
                <h1 class="label">
                    Book Now Here
                </h1>

                <span class="inputs">
                <input type="text" placeholder="Your Name" name="name" required>
                <input type="email" placeholder="Your Email" name="email" required>
                <input type="password" placeholder="Create Password" name="password" required>
                <input type="text" placeholder="Category of your product" name="product" required>
                <input type="text"  placeholder="Weight of Product" name="weight" required>
                <input type="text"  placeholder="height of Product" name="height" required>
                <input type="text"  placeholder="width of Product" name="width" required>
                <input type="text"  id="from" placeholder="From" name="fromplace" required>
                <input type="text"  placeholder="To" name="toplace" required>
                <input type="date" name="dateo">
                <button type="submit" name="submit">Book Now</button>
                </span>
            </form>
        </div>
    </section>
</body>
</html>