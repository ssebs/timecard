<!doctype html>
<html>
<head> 
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="../css/sanitize.css" />
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

    <?php
    require "connect.php";
    require "headerbar.php";

   
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
        <h1 class="txt-ctr">Login</h1>
        <form action="util/login-user.php" method="post" class="ib">
            <label>Username:</label> <input type="text" name="usr" required><br/>
            <label>Password:</label> <input type="password" name="pswd" required><br/><br/>
            <button type="submit" name="sumbit" class="center">Create</button>
        </form>
    </div>
    <br/>


<?php
require "bottombar.php";
?>
</body>
</html>