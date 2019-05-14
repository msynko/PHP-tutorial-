<?php

class Car {

    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;

    function MoveWheels(){

        $this->wheels = 10;

    }


    function CreateDoors(){
        $this->$doors = 6;

    }

}

$bmw = new Car();
$track = new Car();

echo $bmw->wheels . "<br>";

echo $truck->wheels = 10 . "<br>";

$track->CreateDoors();
echo $truck->doors = 16;



 



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