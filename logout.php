<?php
    //// Check for Login cookie here
    if(isset($_COOKIE["userLogin"])) {
        setcookie("userLogin","", time() - 3600);
        echo "<script>alert(Logged out!);</script>";
        header("Location: index.php");
    } else {
        echo "<script>alert(Not logged in!);</script>";
        header("Location: index.php");
    }
?>