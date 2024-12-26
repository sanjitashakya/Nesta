<?php

// $mysql = mysqli_connect("localhost","root","password","4thsem");
$mysql = mysqli_connect("localhost","root","","nesta_sm");

    if(mysqli_connect_errno()){
        echo "Failed to connect " . mysqli_connect_errno();
        exit();
    }
?>
