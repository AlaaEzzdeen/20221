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
        $Host_IP = "127.0.0.1";
        $username="Alaa";
        $password= "1234";
        $database = "alaaBB";
        $con = mysqli_connect($Host_IP, $username, $password, $database);
    
        $ins = mysqli_query($con, "INSERT INTO first ( user_name, phone, email) VALUES ('Azqsqaa', 0341874808 ,'calaaa$')");
        echo var_dump("0239874808");

        $student_name = "Khulud";
        $var_name = $student_name;
        $var_name_ref = &$student_name;

        echo $student_name;
        echo "<br>";
        echo $var_name;
        echo "<br>";
        echo $var_name_ref;

        $student_name = "Alnoud";
        echo "<br>";

        echo $student_name;
        echo "<br>";
        echo $var_name;
        echo "<br>";
        echo $var_name_ref;

    ?>

</body>
</html>