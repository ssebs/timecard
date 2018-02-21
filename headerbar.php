<div id="headerbar"> 
    <ul>
        <li style="float:left">
            <span id="logo-name"><a href="index.php">Test-Site</a></span>
        </li>
        <?php
        
        if(isset($_COOKIE["userLogin"])) {
            echo '<li style="float:right">Welcome, <em>' . $_COOKIE["userLogin"] . '</em></li>';
            echo '<li style="float:right"><a href="logout.php"><strong>Logout</strong></a></li>';
        }
        ?>
        <li style="float:right">
            <a href="new-user.php">New User</a>
        </li>
        <li style="float:right">
            <a href="login.php">Login</a>
        </li>
        <li style="float:right">
            <a href="about.php">About</a>
        </li>
       
    </ul>      
</div>
<div style="clear:both;"></div>
