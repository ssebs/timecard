<!doctype html>
<html>
<head> 
    <style>
:root {
    min-height: 100%;
    background: #ffffff;
}
    </style>
</head>
<body>
<?php
    require "../connect.php";

    echo "<p>Testing POSTs</p>";
    echo "chargeCode: " . $_POST['chargeCode'];
    echo "<br>";
    echo "radio: " . $_POST['in_out'];
    echo "<br>";
    echo "userLogin cookie: " . $_COOKIE['userLogin'];


    //// This block removes the "Latest" tag from the latest entry to we
    ////   can insert a new "Latest"
    $selectSQL = "SELECT * FROM Time WHERE User = '" . $_COOKIE['userLogin'] . "' AND Latest = 1;";
    $result = $conn->query($selectSQL);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            $updateSQL = "UPDATE Time SET Latest=0 WHERE id=" . $row['id'] . " AND TimeClocked='" . $row['TimeClocked'] ."';";
            if($conn->query($updateSQL) == TRUE) {
                echo "Set Latest to 0<br>";
            } else {
                echo "Error updating record: " . $conn->error;
            }
        }
    }

    // get datetime for timekeeping entry
    date_default_timezone_set('America/Los_Angeles');
    $dateTime = date('Y-m-d H:i:s', time());

    //// Insert to time punch record.
    $insertSQL =  "INSERT INTO Time VALUES (NULL, '" . $_COOKIE['userLogin'] . "','" . $_POST['chargeCode'] . "','" . $dateTime ."', '" . $_POST['in_out'] . "', '1');";
    if($conn->query($insertSQL) == TRUE) {
        echo "Input new entry!<br>";
        echo "<script>alert('Clock Punched!'); window.location.href='../time.php' </script>";
    } else {
        echo "Error updating record: " . $conn->error;
    }

?>
</body>
</html>