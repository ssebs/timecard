<!doctype html>
<html>
<head> 
    <title>New User</title>
    <link rel="stylesheet" type="text/css" href="../css/sanitize.css" />
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<?php
require "headerbar.php";
?>

    <div class="center">
        <h3 class="txt-ctr">Create a new User Account</h3>
        <form action="util/create-user.php" method="post" onsubmit="return confirm('Are you sure you want to create this account?');" class="ib">
            <label>Name:</label> <input type="text" name="nm" required><br/>
            <label>Username:</label> <input type="text" name="usr" required><br/>
            <label>Email:</label> <input type="text" name="eml" required><br/>
            <label>Birthday:</label> <input type="date" name="bdy" required><br/>
            <label>Password:</label> <input type="password" name="pswd" required><br/><br/>
            <button type="submit" name="sumbit" class="center">Create</button>
        </form>
    </div>




<?php
require "bottombar.php";
?>
</body>
</html>