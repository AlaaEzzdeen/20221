<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 03</title>
</head>
<body>
    <?php 
        $x = 3;
        $y = 9;
        
        function add($x, $y){
            return ($x+$y);
            }
        function subtract($x, $y){
            return ($x-$y);
            }
        function multiply($x, $y){
            return ($x*$y);
            }
        function divide($x, $y){
            return ($x/$y);
            }
        echo "<p>The result of adding $x and $y is ".add($x, $y)."</p>";
        echo "<p>The result of subtracting $x and $y is ".subtract($x, $y)."</p>";
        echo "<p>The result of multiplying $x and $y is ".multiply($x,$y)."</p>";
        echo "<p>The result of dividing $x and $y is ".divide($x, $y)."</p>";                   
    ?>
</body>
</html>