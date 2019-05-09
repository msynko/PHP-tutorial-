<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>



<?php

if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $connection = mysqli_connect('localhost', 'root', 'root', 'login_app');

    if($connection){
        echo "we are connected";
    }else {
        die("Database connection failed");
    }

 } ?>

<div class="container">

<div class="col-m-6">
    <form action="login_create.php" method="post">
        <div class="form-group">
        <label for="username"> Username</label>
            <input type="username" name="username" class="form-control">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
            </div>

                <input class="btn btn-primary" type="submit" name="submit" value="Submit">
        </form>
</div>
</div>

</body>
</html>