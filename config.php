<?php
    session_start();
    $dpHost = 'localhost';
    $dbName = 'anodra';
    $dbUsername = 'root';
    $dbPassword ='';

    $conn = mysqli_connect($dpHost,$dbUsername,$dbPassword,$dbName);
?>