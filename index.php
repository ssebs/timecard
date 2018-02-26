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

    <div class="center">
        <h1 class="txt-ctr">Timecard</h1>
    </div>
    
    <iframe src="time.php" width="100%" scrolling="no"></iframe>
    

<?php
require "bottombar.php";
?>
</body>
</html>
