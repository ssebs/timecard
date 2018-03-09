<!doctype html>
<html>
<head> 
    <link rel="stylesheet" type="text/css" href="css/sanitize.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
:root {
    /* min-height: 100%; */
    background: #ffffff;
}
    </style>
</head>
<body>

<?php
require "connect.php";
$sql = "SELECT * FROM Time WHERE User = '". $_COOKIE['userLogin'] ."' AND Latest = 1;";
$result = $conn->query($sql);

$clockType="NULL"

?>

<div class="center">
    <?php
    if(isset($_COOKIE['userLogin']))  {
        echo "<h4>Welcome, " . $_COOKIE['userLogin'] . "</h4>";
        echo "<hr>";

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "Last punch: <em>" . $row['TimeClocked'] . " " . $row['ClockType'] . "</em>";
                $clockType = $row['ClockType'];
            }
            
        } 
    ?>
    
    <br>
    <br>

    <form action="util/punch.php" method="post" class="ib">
        <label><strong>ChargeCode: </strong></label><input type="text" name="chargeCode" value="chg-regular" ><br>
        <?php
        if(strtoupper($clockType) == "OUT") {
            echo '<label><strong>In: </strong></label><input type="radio" value="IN" name="in_out" checked="true" >';
            echo '<label><strong>Out: </strong></label><input type="radio" value="OUT" name="in_out">';
        } else if(strtoupper($clockType) == "IN") {
            echo '<label><strong>In: </strong></label><input type="radio" value="IN" name="in_out"  >';
            echo '<label><strong>Out: </strong></label><input type="radio" value="OUT" name="in_out" checked="true">';
        } else {
            echo '<label><strong>In: </strong></label><input type="radio" value="IN" name="in_out"  >';
            echo '<label><strong>Out: </strong></label><input type="radio" value="OUT" name="in_out" >';
        }
        
        ?>
        
        <input type="submit" value="Punch" style="display:block;margin:10px auto;">
    </form>
    

  <?php      
    } else {
        echo "<h4>Please login at the top of the page.</h4>"; 
    }


    ?>


</div>

</body>
</html>
