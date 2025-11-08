<?php 
    $server = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'cs2a_db';

    $conn = mysqli_connect($server,$user,$password,$database);

        if(!$conn){
            echo "May mali" .mysqli_errno();
        }
        else{
        }
?>  
