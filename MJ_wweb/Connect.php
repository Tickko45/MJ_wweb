<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "MJ_wweb";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("ไม่สามารถเชื่อมต่อฐานข้อมูลได้ : " . $conn->connect_error);
    }

?>