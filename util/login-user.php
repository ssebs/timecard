User logged in:
<?php
    require "../connect.php";

    $sql = "SELECT Users.User, Passwds.Pass FROM Users INNER JOIN Passwds ON Users.User = Passwds.User WHERE Users.User = '" . $_POST["usr"] . "'";
    $result = $conn->query($sql);

    echo $_POST["usr"]; 
    echo "<br>Passwd: "; 
    echo $_POST["pswd"]; 
?>
<br>
<?php
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            // echo "<br>row pass = " . $row["Pass"];
            // echo "<br>post pswd = " . $_POST["pswd"];

            if($row["Pass"] == $_POST["pswd"]) 
            {
                echo "<h3>PASSWORD MATCH</h3>";
                
            }
        
        }
    } else 
    {
        echo "0 results";
    }

?>
