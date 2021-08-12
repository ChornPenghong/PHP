<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP - $this + instanceof Keyword</title>
</head>
<body>
    <?php
        // The $this keyword refers to the current object, and is only available inside methods.
        class Fruit{
            public $name;
            function set_name($name){
                $this->name = $name;
            }
            function get_name(){
                return $this->name;
            }
        }
        $apple = new Fruit();
        $apple -> set_name('Apple');
        echo "Fruit Name: " . $apple->get_name() . "<br />";
        // instanceof : Check the object is belongs to a specific class
        $banana = new Fruit();
        echo $banana instanceof Fruit;
        var_dump($apple instanceof Fruit);
    ?>
</body>
</html>