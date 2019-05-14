<?php

class Car {

    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;

    function MoveWheels(){

        $this->$wheels = 10;

    }


    function CreateDoors(){
        $this->$doors = 6;

    }

}

$bmw = new Car();


class Plane extends Car  {

var $wheels = 20;

}

$jet = new Plane ();
echo $jet->wheels;

// if(class_exists("Plane")){

//     echo "it exist";

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