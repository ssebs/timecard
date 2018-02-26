<!doctype html>
<html>
<head> 
    <title>Testing PHP</title>
    <link rel="stylesheet" type="text/css" href="css/sanitize.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
:root {
    min-height: 100%;
    background: #ffffff;
}
    </style>
</head>
<body>

<?php
require "connect.php";
$sql = "SELECT * FROM Users INNER JOIN Passwds ON Users.User = Passwds.User";
$result = $conn->query($sql);

?>

<div class="center">
    <?php
    if(isset($_COOKIE['userLogin']))  {
        echo "<h4>Welcome, " . $_COOKIE['userLogin'] . "</h4>";
        echo "<hr>";
    } else {
        echo "<h4>Please login at the top of the page.</h4>"; 
    }
    ?>
    <table class="center-ib">
        <tr>
            <th>Mon</th>
            <th>Tue</th>
            <th>Wed</th>
            <th>Thu</th>
            <th>Fri</th>
        </tr>

     <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "\n<tr>\n<td>" . $row["Name"]. "</td>\n<td>" . $row["User"]. "</td>\n<td>" . $row["Email"]. "</td>\n<td>" . $row["Birthday"]. "</td>\n<td>" . $row["Pass"] . "</td></tr>";
            }
        } else {
            echo "0 results";
        }

    ?>
        
    </table>


    <!-- <h4>User list</h4>
    <table class="center-ib">
        <tr>
            <th>Name</th>
            <th>User</th>
            <th>Email</th>
            <th>Date of Birth</th>
            <th>Password (uses inner join)</th>
        </tr>

    <?php
        // if ($result->num_rows > 0) {
        //     while($row = $result->fetch_assoc()) {
        //         echo "\n<tr>\n<td>" . $row["Name"]. "</td>\n<td>" . $row["User"]. "</td>\n<td>" . $row["Email"]. "</td>\n<td>" . $row["Birthday"]. "</td>\n<td>" . $row["Pass"] . "</td></tr>";
        //     }
        // } else {
        //     echo "0 results";
        // }

    ?>
    </table> -->
</div>

</body>
</html>
