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
    require "headerbar.php";

    //// Check for Login cookie here, display it if found..
    if(isset($_COOKIE["userLogin"])) {
        echo "<h4 class='center'>" . $_COOKIE["userLogin"] . " is already logged in!</h4>";
    } 

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