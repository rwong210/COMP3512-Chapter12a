<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>  
    <title>Lab 12a</title>   
</head>
<body>
<?php
   // coded added here
   $outside = "I'm outside of any functions";
    echo "Outside=" . $outside . "<br/>";

    function testScope($param) {
        $inside = "I'm inside a function";
        echo "Inside=" . $inside . "<br/>";
        echo "Param=" . $param . "<br/>";
        //echo "Outside=" . $outside . "<br/>";
}

   // now invoke that 
   // testScope("I'm a parameter");
   testScope($outside);
?> 
</body>
</html>