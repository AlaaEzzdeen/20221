<?php 
    $Host_IP = "127.0.0.1";
    $username="Alaa";
    $password= "1234";
    $database = "Lab_db";
    $con = mysqli_connect($Host_IP, $username, $password, $database);

        if($con) {
            try {  
            $ins = mysqli_query($con, "INSERT INTO 06_Lab (F_name, L_name, S_id, Major) 
            VALUES ('Belal', 'Elhalles', 4, 'NES')");
            echo "<p> Data has been inserted </p>";
            } catch (mysqli_sql_exception) {
            echo "<p> Data is already inserted </p>";
            }  
        } 
        else {
            echo "<p> wrong credentials</p>";
        }
    
?>