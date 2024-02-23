<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
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
            height: 60vh;
            backdrop-filter: blur(10px);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            border-radius: 8px;
            padding: 25px;
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
                    User Registration
                </label>
                <input type="text" name="fname" id="" placeholder="Enter your name">
                <input type="email" name="email" id="" placeholder="Enter your Email">
                <input type="password" name="password" id="" placeholder="Enter your password">
                <button type="submit" name="submit">Register</button>
                <p>Already have account ? <a href="login-page.php">Sign-in</a></p>
            </form>
        </div>
    </section>  
</body>
</html>


<?php
include 'connection.php';

if(isset($_POST['submit'])){
    $name = $_POST['fname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    if(empty($name) || empty($email) || empty($password)){
        echo '<script>alert("Please fill all the Fields");</script>';
    }else{
        $check = "Select * from userdata where email='$email'";
        $result= mysqli_query($con,$check);
        $num = mysqli_num_rows($result);
        if($num == 0){
        $sql = "insert into `userdata` (fname,email,password) values ('$name','$email','$password')";

        $result=mysqli_query($con,$sql);
        if($result){
            echo '<script>alert("Data inserted !");</script>';
        }else{
            die(mysqli_error($con));
        }
    }else{
        echo '<script>alert("User already exists !");</script>';
    }
    }
}



?>