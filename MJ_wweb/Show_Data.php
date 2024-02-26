<?php require("Connect.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $sql = "SELECT * FROM employees";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id : " . $row["id"]. " ชื่อ-นามสกุล : " . $row["fullname"]. " ที่อยู่ : " . $row["address"]. " เงินเดือน : " . $row["salary"]. " วันเกิด : " . $row["birthday"]. "<br>";
    }
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>
    
</body>
</html>
