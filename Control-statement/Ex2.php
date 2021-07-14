<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Case Statement</title>
</head>
<body>
<?php 
    $d = date("D");

    switch("$d"){
        case "Mon":
            echo "Today is Monday";
        case "Tues":
            echo "Today is tuesday";
        case "Wed":
            echo "Today is Wednesday";
        case "Thurs":
            echo "Today is Thursday";
        case "Fri":
            echo "Today is Friday";
        case "Sat":
            echo "Today is Saturday";
        case "Sun":
            echo "Today is Sunday";
        default:
            echo "Wonder which day is this?";
    }
    echo "<br>";
?>
<?php 
    $operator = "*";
    $x = 100;
    $y = 30;
    switch ($operator){
        case '+':
            echo "X + Y = ($x+$y)"."=". $x+$y;
            break;
        case '-':
            echo "X - Y = ($x-$y)"."=". $x-$y;
            break;
        case '*':
            echo "X * Y = ($x*$y)"."=". $x*$y;
            break;
        case '/':
            echo "X / Y = ($x/$y)"."=". $x/$y;
            break;
        default:
            echo "Error! operator is not correct";
    }
?>
</body>
</html>