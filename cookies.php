<?php

$name = "SomeName";
$value = 100;
$expiration = time() + (60*60*24*7*4);

setcookie($name,$value,$expiration);


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
     <?php
     
    if(isset($_COOKIE["SomeName"])){
        $someone = $_COOKIE["SomeName"];
        echo $someone;
    }else {
        $someone = "";
    }
     
     ?>
 </body>
 </html>