<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HTML Tags in PHP</title>
</head>
<body>
    <?php 
    echo "<br>";
    echo "<h1>"."This is a header"."</h1>";
    echo "<p>"."This a paragraph"."</p>";
    define('TESTING', 'My name is alaa and I&apos;m testing the constants in PHP');
    echo date("Y / m / d ------ l");
    const ALAA = "My name is alaa";
    for ($i=0; $i < 10; $i++) {
        echo ("<br>");
        echo ("hello"." ".$i);
    }

    echo ("<br>".ALAA);
    ?>    
</body>
</html>
