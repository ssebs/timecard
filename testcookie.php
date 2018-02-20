<?php
  
//86400 = 1 day
setcookie("test", "testval", time() + (86400 / 6), "/");

if(isset($_COOKIE["test"])) {
    echo "<h2>" . $_COOKIE["test"] . "</h2>";
} else {
    echo "cookie not set";
}

?>
