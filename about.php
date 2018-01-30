<!doctype html>
<html>
<head> 
    <title>About</title>
    <link rel="stylesheet" type="text/css" href="../css/sanitize.css" />
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

    <?php
    require "headerbar.php";

    // require "connect.php";
   
   
    // $sql = "SELECT * FROM Users";
    // $result = $conn->query($sql);



    // if ($result->num_rows > 0) {
    //     while($row = $result->fetch_assoc()) {
    //         echo "\n<tr>\n<td>" . $row["First"]. "</td>\n<td>" . $row["Last"]. "</td>\n<td>" . $row["Email"]. "</td>\n<td>" . $row["Birthday"]. "</td>\n</tr>";
    //     }
    // } else {
    //     echo "0 results";
    // }

    ?>

    <div class="center">
        <h1 class="txt-ctr">About</h1>
        <p>Testing php/mysql connection. Also planning on creating a simple timecard web-app.</p>
    </div>
    <br/>




<?php
require "bottombar.php";
?>
</body>
</html>