<?php

include_once '../connection/connection.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($conn, 'SELECT email, password FROM kasir');
$data = mysqli_fetch_array($query);
$email = $data['email'];
$pw = $data['password'];

if ($username == $email && $password == $pw) {
    ?>
    <script language="Javascript">
        document.location = '/Tubes/pages/kasir/transaksi.php';
    </script>
    <?php
} else {
    ?>
    <script language="Javascript">
        document.location = '/Tubes/pages/kasir/login.html';
    </script>
    <?php
}

?>