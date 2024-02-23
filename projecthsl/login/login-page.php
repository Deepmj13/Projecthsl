<?php
include 'connection.php';

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $name = $_POST['name'];
    $password = $_POST['password'];
   
    $sql  = "SELECT * FROM userdata WHERE email = '$email' AND password = '$password'";;
    $result=mysqli_query($con,$sql);
    $num = mysqli_num_rows($result);
    if($num == 1){
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $email;
        $_SESSION['name'] = $name;
        header("location: welcome.php");
    }else{
        echo '<script>alert("Unmatched username or password");</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login User</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>


*{
    margin:0;
    padding: 0;
    box-sizing: border-box;
    font-family: "poppins", sans-serif;
}
.container{
    width: 100%;
    height:100vh;
    background: linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.2)),url(R.jpg);
    background-position: center;
    background-size: cover;
    display: flex;
    align-items: center;
    justify-content: center;
}
.content{
    width: 30rem;
    height: 40vh;
    backdrop-filter: blur(10px);
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    border-radius: 8px;
    padding: 50px;
    display: flex;
    align-items:center;
    justify-content: center;
}
form{
    width: 90%;
    height: 80%;
    display: flex;
    justify-content:center;
    gap: 2rem;
    flex-direction: column;
    text-align: center;
}
label{
    font-size: 2rem;    
    font-weight: 200;
}
input{
    padding: 10px 15px;
    outline: none;
    border: none;
    border-radius:5px;
    background: #ffffff79;
}
button{
    width: 50%;
    padding:7px 10px;
    margin: auto;
    background:#000;
    color: #fff;
    border: none;
    border-radius:3px;
    transition: .3s;
    cursor: pointer;
}
button:hover{
    transform: scale(1.03);
}
button:active{
    transform: scale(.9);
}

    </style>
</head>
<body>
    <section class="container">
        <div class="content">
            <form method="post">
                <label>
                    User Login
                </label>
                <input type="email" name="email" id="" placeholder="Enter your Email">
                <input type="password" name="password" id="" placeholder="Enter your password">
                <input type="text" name="name" id="" placeholder="Enter your Firstname">
                <button type="submit" name="submit">Login</button>
                <p>Don't have account ? <a href="User-registration.html">Sign-Up</a></p>
            </form>
        </div>
    </section>
</body>
</html>