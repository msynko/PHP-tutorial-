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
        function say_something(){
            echo "Hello there";
        } 

        
    
        function calculate(){
            echo 348 + 890;
        }


        function init(){
            say_something();
            echo "<br>";
            calculate();
        }

        init();
    ?>


</body>
</html>