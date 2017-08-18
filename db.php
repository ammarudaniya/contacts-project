<?php

    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';

    $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
    if(!$conn)
    {
        die('Could not connect: ' .mysql_error());
    }
    echo 'connected successfully';
    mysqli_select_db($conn, 'crud');
    mysqli_close($conn);
?>