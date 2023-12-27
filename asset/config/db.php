<?php
    $server = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'school';
    $conn = mysqli_connect($server, $user, $pass, $db);
    mysqli_select_db($conn, $db);                             
    if(!$conn){
        echo "Database Not Connected";
    }         
?>