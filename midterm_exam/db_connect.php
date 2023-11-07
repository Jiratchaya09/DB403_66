<?php
    $conn = new mysqli('db403-mysql','root','P@ssw0rd','');
    if ($conn->connect_error) {
        echo $conn->connect_error;
        die();
    }
