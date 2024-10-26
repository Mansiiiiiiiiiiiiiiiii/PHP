<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <div class="container">
        This is my first PHP website
        <?php
        define('PI',3.14);
        echo "Hello Mansi is learning PHP";
        echo "<br>";
        ?>
        <?php 
        $variable1 = 34;
      
        $variable2 = 45;
        
        echo $variable1;
        echo "<br>";
        echo $variable2;
        echo "<br>";
        echo $variable1+$variable2;
        echo "<br>";
        echo "Operators";
        echo "<br>";
        echo "<h1>Arithmatic Operators</h1>";
        echo "<br>";
        echo "Var1 + var 2 =";
        echo $variable1+ $variable2;
        echo "<br>";
        echo "Var1 - var2 =";
        echo $variable1-$variable2;
        echo "<br>";
        echo "var1 * var2 =";
        echo $variable1*$variable2;
        echo "<br>";
        echo "var1 / var2 =";
        echo $variable1/$variable2;
        echo "<br>";
        echo "<h1>Assignment Operator</h1>";
        $newVar = $variable1;
        $newVar += 1;
        echo "The value of new variable is";
        echo "<br>";
        echo $newVar;
        echo "<h1>Comparision Operator</h1>";
        echo "The value of 1 == 4";
        echo "<br>";
        echo var_dump(1==4);
        echo "<br>";
        echo "The value of 1 != 4";
        echo "<br>";
        echo var_dump(1!=4);
        ?>
        <?php 
        echo "<h1>Data Types </h1>";
        $var = "This is a String";
        echo $var;
        echo "<br>";
        $var = 67;
        echo var_dump($var);
        echo "<br>";
        echo PI;
        ?>

    </div>
</body>
</html>