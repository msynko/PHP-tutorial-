<?php

if(isset($_POST['submit'])){

    $name = array("Marina","Bob", "Tom","Jack");
    $minimum = 5;
    $maximum = 10;

$username = $_POST['username'];
$password = $_POST['password'];

// echo "Hello" ." " . $username;
// echo "Your password is:" . $password;


if(strlen($username) < $minimum ) {

echo "Username has to be longer than 5";

}

if(strlen($username) > $maximum ) {

    echo "Username is too big";
    
    }

if(!in_array($username, $name )){

    echo "Sorry, you cannot log in";
} else {
    echo "Welcome";
}
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="form_process.php" method="post">

        <input type="text" placeholder="Name" name="username" >
        <input type="password" placeholder="Password" name="password">
        <br>
        <input type="submit" name="submit">
    
    </form>
</body>
</html>