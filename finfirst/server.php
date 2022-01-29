<?php

    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'finance_register_db';

    $connect = mysqli_connect($servername, $username, $password, $dbname);
    
    if(isset($_POST['username_check'])){
        $username = $_POST['username'];
        $sql = "SELECT * FROM users WHERE username = '$username' ";
        $results = mysqli_query($connect, $sql);
        if(mysqli_num_rows($results) > 0) {
            echo 'taken';
        } else{
            echo 'not_taken';
        }
        exit();
    }

    if(!$connect){
        die("Connection failed" . mysqli_connect_error());
    }
?>