<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $n = 1;
    $s = "1";
    $n1 = $n + $s; 
    //$n2 = $n1 + "10 little penguins";
    $n3 = "hello";
    $n4 = " world";
    //$n5 = $n3+$n4;
    $n6 = $n3.$n4;
    echo "$n<br>";
    //The output will be 1 as an integer
    echo "$s<br>";
    //The output will be 1 as a string
    echo "$n1<br>";
    //The output will be 2 it will just use 1 from $s as an integer next to the $n 1 because we used + instead of .
    //echo "$n2<br>";
    //An warning occurs becuase there is a string of words added to integer.
    echo "$n3<br>";
    //it will print hello
    echo "$n4<br>";
    //it will print world
    //echo "$n5<br>";
    //It can't be added because the + is not the concatenation operand to add strings to eachother in php, it should be .
    echo "$n6<br>";
    ?>
</body>
</html>