<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <style>
    *{
        margin:0;
        padding: 0;
        box-sizing: border-box;
    }
    .container{
        max-width: 80%;
        background-color: pink;
        margin:auto;
        padding: 23px;
    }
   </style>
</head>
<body>
    <div class="container">
        <h1>PHP</h1>
        This is a container
        <?php
$a = 22;
if($a>18){
    echo "You can go to the party";
}
else if($a == 7){
    echo "You are just 7 ";
}
else{
    echo "You cannot go to party";
}
echo "<br>";
        ?>
        <?php
        $languages =array("JavaScript","Python","Java","C#","PHP","C/C++","Ruby","Go");
       $a=0;
       while($a < count($languages)){
        echo "<br> The languages is:";
        echo $languages[$a];
        $a++;
       }
       echo "<br>";
       echo "<br>";
        $a=0;
        while($a <= 10){
            echo "The value of a is";
            echo $a;
            echo "<br>";
            $a++;
        }
        foreach($languages as $values){
            echo "<br>The values for each loop ";
            echo $values;
        }
        ?>
    </div>
</body>
</html>