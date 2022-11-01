<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FifthLab</title>
    <style>
        .A {
            background-color: yellow;
        }
        table, tr, td, th{
            border: 1px solid; 
        }
        th {
            background-color: orange;
        }
    </style>
</head>
<body>
<?php 
    include("Course.php");

    $course1 = new Course("Adv","SWE322","Advancad web","A+");
    $course2 = new Course("Intro to software","SWE202","Intro to software","A");
    $course3 = new Course("Differential ","MTH304","Differential equation","B+");


    $courses = array($course1, $course2, $course3);
    echo "<table>";
    echo "<tr><th>"."Course name"."</th><th>"."Course code"."</th><th>"."Course desc"."</th><th>"."Course grade";
    foreach($courses as $course){
        echo $course->courseDetails();
    }
    echo "</table>"
    
?>    
</body>
</html>