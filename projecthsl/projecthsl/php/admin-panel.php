<?php
include 'connection.php';

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
            box-sizing:border-box;
            font-family:"poppins",sans-serif;
            color:#fff;
        }
        table{
            border:5px solid #fff;
            
        }
        td{
            border:3px solid #fff;padding:5px;
        }
        .hero{
            width:100%;height:100vh;
            background:#111;

        }
        header{
            width:100%;
            height:8vh;
            color:#111;
            background:#F7F7F7;
            display:flex;
            align-items:center;
            justify-content:space-between;
            padding:0 2rem;
        }
        h1{
            color:#111;
            font-size:1.2rem;
            font-weight: 200;
        }
        .do{
            width:100%;
            padding:2rem ;
            display:flex;
            flex-direction:column;
            align-items:center;
            justify-content:center;
            background:rgba(0, 0, 0, 0.4);
        }
        .do h1{
            color:#fff;
            font-size:2rem;
            font-weight:300;
        }
        button{
            padding:10px;
            background: #111;
            color: #F7F7F7;

        }
    </style>
</head>
<body>
    <section class="hero">
        <header>
        <div class="logo">
            <h1>HindShipping</h1>
        </div>
        <div class="greeting">
            <h1>hello User</h1>
        </div>
    </header>
    <div class="do">
        <h1>
            Pending Orders
        </h1>
        <table>
            <tr>
                <td>no.</td>&nbsp;
                <td>name</td>&nbsp;
                <td>Email</td>&nbsp;
                <td>product</td>&nbsp;
                <td>weight</td>&nbsp;
                <td>from</td>&nbsp;
                <td>to</td>&nbsp;
                <td>date</td>&nbsp;
            </tr>
            <?php
            $query = "select * from userorder";
            $result = mysqli_query($conn,$query);
            while($row = mysqli_fetch_array($result)){?>
                <tr>
                <td><?= $row['id']; ?></td>&nbsp;
                <td><?= $row['name']; ?></td>&nbsp;
                <td><?= $row['email']; ?></td>&nbsp;
                <td><?= $row['product']; ?></td>&nbsp;
                <td><?= $row['weight']; ?></td>&nbsp;
                <td><?= $row['placefrom']; ?></td>&nbsp;
                <td><?= $row['placeto']; ?></td>&nbsp;
                <td><?= $row['date']; ?></td>&nbsp;
                <td>
                    <form action="action.php" method="post">
                    <button type="submit" name="done" value="<?=$row['id'];?>">Done</button>
                    <button type="submit" name="delete" value="<?=$row['id'];?>">Delete</button>
                    </form>
                </td>&nbsp;
            
                
            </tr>
            <?php
            }
            ?>

        </table>
    </div>
    <div class="do">
        <h1>
            Complete Orders
        </h1>
        <table>
            <tr>
                <td>no.</td>&nbsp;
                <td>name</td>&nbsp;
                <td>Email</td>&nbsp;
                <td>product</td>&nbsp;
                <td>weight</td>&nbsp;
                <td>from</td>&nbsp;
                <td>to</td>&nbsp;
                <td>date</td>&nbsp;
            </tr>
            <?php
            $query = "select * from complete_order";
            $result = mysqli_query($conn,$query);
            while($row = mysqli_fetch_array($result)){?>
                <tr>
                <td><?= $row['id']; ?></td>&nbsp;
                <td><?= $row['name']; ?></td>&nbsp;
                <td><?= $row['email']; ?></td>&nbsp;
                <td><?= $row['product']; ?></td>&nbsp;
                <td><?= $row['weight']; ?></td>&nbsp;
                <td><?= $row['placefrom']; ?></td>&nbsp;
                <td><?= $row['placeto']; ?></td>&nbsp;
                <td><?= $row['date']; ?></td>&nbsp;    
            </tr>
            <?php
            }
            ?>
        </table>
    </div>
    </section>
</body>
</html>