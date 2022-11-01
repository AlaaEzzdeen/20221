<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 4</title>
    <style>
        ul {
            margin-left: 40%;
            margin-right: 50%;
        }
        li {
            font-size: 40px;
            font-family: sans-serif;
            color: green;
        }
        table, tr, th {
            border: 1px solid;
            margin-left: 25%;
            font-size: 40px;
            width: auto;
        }
        p{
            text-align: center;
            font-size: 50px;
            color: magenta;
        }
    </style>
</head>
<body>
    <?php 
        $classmates = array("Mojab","Ali","Hisham");
        echo "<ul>";
        foreach($classmates as $classmate) {
            echo "<li>$classmate</li>";
        }
        echo "</ul>";
        #this marks the end of the first part

        $courses = array("CIS 103"=>"Programming Fundamentals I", "CIS 104"=>"Programming Fundamentals II",
        "CIS 201"=>"Fundamentals of Web Design", "CIS 202"=>"Data Structures", "CIS 221" => "Introduction to Database Systems");

        echo "<table>";
        echo "<tr><th>Course Code</th><th>Course Name</th></tr>";
        foreach($courses as $courseKey => $courseValue) {
            echo "<tr><td> $courseKey </td><td> $courseValue </td><tr>";
        }
        echo "</table>";
        #this marks the end of the second part
    $req = array (
        array("Laptop","Asus", "MSI"),
        array("CPU","AMD","INTEL"),
        array("GPU","AMD", "Nvidia")
    );

    echo "<p> I am looking for a ".$req[0][1]." ".$req[0][0]." with ".$req[1][1]." ".$req[1][0]." and ".$req[2][2]." ".$req[2][0]."</p>";
    // This marks the end of the last part in Lab 4
    ?>
</body>
</html>