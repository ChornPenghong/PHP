<!-- if (condition) {
  code to be executed if condition is true;
} -->
<!DOCTYPE html>
<html>
    <body>

    <?php
    // if empty($user) = TRUE, set $status = "anonymous"
    echo $status = (empty($user)) ? "anonymous" : "logged in";
    echo("<br>");

    $user = "John Doe";
    // if empty($user) = FALSE, set $status = "logged in"
    echo $status = (empty($user)) ? "anonymous" : "logged in";
    echo("<br>");

    // variable $user is the value of $_GET['user']
    // and 'anonymous' if it does not exist
   echo $user ?? "anonymous";
   echo("<br>");
  
   // variable $color is "red" if $color does not exist or is null
   echo $color = $color ?? "red";
    ?>  
    //if we dont give give its value then the output is eqaul to null otherwise if we give '' value for it, it will catch the of the condition.

    </body>
</html>