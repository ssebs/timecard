<!doctype html>
<html>
<head> 
    <title>ssebs Timecard</title>
    <link rel="stylesheet" type="text/css" href="css/sanitize.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

    <?php
    require "connect.php";
    $sql = "SELECT * FROM Users INNER JOIN Passwds ON Users.User = Passwds.User";
    $result = $conn->query($sql);

    require "headerbar.php";
    ?>
    
    <?php
    if(isset($_COOKIE['userLogin'])) {
        echo '<iframe src="time.php" width="100%" scrolling="no"></iframe>';
    }else {
        echo "<div class='center'><h4>Please login at the top of the page.</h4></div>"; 
    }
    ?>
<?php
require "bottombar.php";
?>
</body>
</html>
