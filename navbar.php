<?php
    if(isset($_SESSION['user'])) {
        include("login-navbar.php");
    } else {
        include("navbar-reg.php");
    }
?>
