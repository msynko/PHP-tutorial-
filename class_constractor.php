<?php

class Car {

    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;

    function __construct(){

       echo  $this->wheels = 10;

    }



}

$bmw = new Car();
$truck = new Car();
$semi = new Car();

 



 



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