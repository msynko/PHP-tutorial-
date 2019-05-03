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