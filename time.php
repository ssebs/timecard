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
    <h3>List of all users:</h3>
    <table class="center-ib">
        <tr>
            <th>Name</th>
            <th>User</th>
            <th>Email</th>
            <th>Date of Birth</th>
            <th>Password (uses inner join)</th>
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
</div>

</body>
</html>
