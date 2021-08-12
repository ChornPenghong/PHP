<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP - Class</title>
</head>
<body>
    <h3><b>Define a class</b></h3>
    <?php 
        class Fruit{
            //properties=Variables
            public $name;
            public $color;

            //Methods=Functions
            function set_name($name){
                $this -> name = $name;
            }
            function get_name(){
                return $this->name;
            }
        }
    ?>
</body>
</html>