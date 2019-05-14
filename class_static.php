<?php

class Car {

    static $wheels = 4;
    var $hood = 1;


    function MoveWheels(){

        Car::$wheels = 10;

    }




}

$bmw = new Car();

// $bmw->wheels;
Car::MoveWheels();
echo Car::$wheels;


 



// if(method_exists("Car", "MoveWheels")){
//     echo "the method exists";
// } else {
//     echo "no";
// }


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
    
</body>
</html>