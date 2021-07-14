<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control-Statemnt</title>
</head>
<body>
<h3>If else statement</h3>
<p><u>Example 1:</u></p>
<?php 
   $x = 150;
   $y = 15.2;
   if($x>$y)
       echo "X is Max!";
   else
       echo "Y is Max!";
?>
<p><u>Example 2:</u></p>
<?php include "Main.php";?>

<h3>If else if else</h3>
<p><u>Example 1:</u></p>
<?php 
    $score = 79;
    if($score >=85 && $score <=100)
        echo "Ecellence...!";
    elseif($score >=70 && $score < 85)
        echo "Very Good...!";
    elseif($score >= 50 && $score <70)
        echo "Fair...!";
    else
        echo "Fail...!";
?>
<p><u>Example 2:</u></p>
<?php 
    $day = "Friday";
    if($day =="Monday"){
        echo "Laugh on Monday, laugh for danger.<br>";
    }elseif($day =="Tuesday"){
        echo "Laugh on Tuesday, kiss a stranger. <br>";
    }elseif($day =="Wednesday"){
        echo "Laugh on Wednesday, laugh for a letter. <br>";
    }elseif($day =="Thursday"){
        echo "Laugh on Thursday, something better.<br>";
    }elseif($day =="Friday"){
        echo "Laugh on Friday, laugh for sorrow. <br>";
    }elseif($day =="Saturday"){
        echo "Laugh on Saturday, joy tomorrow.<br>";
    }else{
        echo "No Information is available for this day. <br>";
    }
?>
<h3>Nested Condition</h3>
<p>Example 1:</p>
<?php 
    $i = 10;
    if ($i ==10)  {
        //First if statement
        if($i < 15)
            echo "i is smaller than 15. <br>";
    /*  Nested-if statemet 
        will only be executed if statement above 
        it is true */
        if ($i < 12)
            echo "i is smaller than 12 too. <br>";
        else
            echo "i is greater than 15. <br>";
    }
?>
<p>Example 2:</p>
<?php 
    $diceNumber = 4;
    if ($diceNumber == 1) {
        echo "The dice number is 1";
    }elseif($diceNumber % 2 == 0){
        //if dice number is divisible by two
        if($disnumber ==2){
            echo "The dice number is 2";
        }elseif($diceNumber == 4){
            echo "The dice number is 4";
        }elseif($diceNumber == 6){
            echo "The dice number is 6";
        }else{
            echo "The dice number has to be between 1 to 6";
        }
    }elseif($diceNumber == 3){
        echo "The dice number is 3";
    }elseif($diceNumber == 5){
        echo "The dice number is 5";
    }else{
        echo "The number has to be between 1 to 6";
    }
?>
<p>Example 3:</p>
    $username = 'sa';
    $pass = '123';
    $cpass = '123';
    $utype ='admin';
        if(strcmp($username, 'sa')==0)
        {
            if(strcmp($pass, '123')==0)
            {
                if(strcmp($cpass, '123')==0)
                {
                    if(strcmp($utype, 'admin'))
                    {
                        echo "Welcome to log in";
                    }
                    else
                    {
                        echo "Invalid User Type!";
                    }
                }
                else
                {
                    echo "Invalid confirm password";
                }
            }
            else
            {
                echo "Invalid password!";
            }
        }
        else
        {
            echo "Invalid User Name!";
        }
</body>
</html>