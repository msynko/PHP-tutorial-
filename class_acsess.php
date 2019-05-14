<?php

class Car {

    public $wheels = 4;
    protected $hood = 1;
    private $engine = 1;
    var $doors = 4;

    function showProperty(){

       echo $this->hood;

    }


}

$bmw = new Car();
$semi = new Semi();
class Semi extends Car {

    function showProperty(){

        echo $this->engine;
 
     }

}

echo $bmw->showProperty();
echo $semi->showProperty();

 



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