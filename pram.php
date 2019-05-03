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

    function greeting($name){

      echo "Hello" . " " . $name . "<br>";

    }

   greeting("Marina");



   function calculate($number1, $number2){
       $sum = $number1 + $number2;
       echo $sum; 
   }
   calculate(23,45)
?>
</body>
</html>