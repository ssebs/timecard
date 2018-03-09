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
    ?>

    <div class="center" style="text-align: left">
        <div class="center" style="text-align: left">
            <h1 class="txt-ctr">About</h1>
            <p class="txt-ctr">Very basic php/mysql timecard application.</p>
            <hr>
            <h5 class="txt-ctr">Current features include:</h5>
            <ul style="text-align: left">
                <li>Users - creation, login, passwords (plaintext)</li>
                <li>Basic Punching in and out, with charge codes (regular, sick, etc)</li>
                <li>Reporting*</li>
            </ul>
            <p><sup>*reporting functionality is unstable.</sup></p>
        </div>
    </div>
    <br/>




<?php
require "bottombar.php";
?>
</body>
</html>