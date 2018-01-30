<?php
require "../connect.php";

// echo $_POST["nm"];
// echo "<br>"; 
// echo $_POST["eml"]; 
// echo "<br>"; 
// echo $_POST["usr"]; 
// echo "<br>"; 
// echo $_POST["bdy"]; 
// echo "<br>"; 
// echo $_POST["pswd"]; 

$sql = 'INSERT INTO Users VALUES (NULL, "' . $_POST["nm"] . '", "' . $_POST["usr"] . '", "' . $_POST["eml"] . '", "' . $_POST["bdy"] . '");';
$result = $conn->query($sql);

header('Location: '.'../../');

?>