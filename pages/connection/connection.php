<?php
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $db = 'db_coffee_shop';

    $conn = mysqli_connect($host,$username,$password);
    $link = mysqli_select_db($conn,$db) or die(mysqli_error());
?>