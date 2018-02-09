<!doctype html>
<html>
<head> 
    <title>Testing PHP</title>
    <link rel="stylesheet" type="text/css" href="css/sanitize.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

    <?php
    require "connect.php";
    $sql = "SELECT * FROM Users";
    $result = $conn->query($sql);

    // for($i = 0; $i < 10; $i++)
    // {
    //     echo "test PHP <strong>#" . ($i+69) . "</strong>";
    //     echo "<br>\n";
    // }

    require "headerbar.php";
    ?>

    <div class="center">
        <h1 class="txt-ctr">Timecard</h1>
        <p>Testing Sample user database connection. Also planning on creating a simple timecard web-app.</p>
    </div>
    <hr>
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
                    echo "\n<tr>\n<td>" . $row["Name"]. "</td>\n<td>" . $row["User"]. "</td>\n<td>" . $row["Email"]. "</td>\n<td>" . $row["Birthday"]. "</td>\n<td>*Passwd goes here*</td></tr>";
                }
            } else {
                echo "0 results";
            }

        ?>
        </table>
    </div>

<?php
require "bottombar.php";
?>
</body>
</html>
