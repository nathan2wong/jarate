<?php
    include("initialize.php");
    if(isset($_SESSION['user'])){
        header("Location: home.php");
        die;
    }
    $msg = "";
    if(isset($_POST['login'])) {
        if($_POST['fname'] != null && $_POST['pass'] != null && $_POST['check_pass'] != null && $_POST['email'] != null && $_POST['lname'] != null) {
            $user = stripslashes($_POST['email']);
            $pass = sha1(stripslashes($_POST['pass']));
            $query = $connect->query("SELECT * FROM `users` WHERE `email`='$user' AND `pass` = '$pass' LIMIT 1");
            $max = $connect->query("SELECT * FROM `users` ORDER BY `ID` DESC")
            if($query->num_rows < 0) {
                $connect->query("INSERT INTO `users` (`ID`, `fname`, `lname`, `email`, `pass`) VALUES()")
            } else {
                $msg = "Email already registered!";
            }
        } else {
            $msg = "Please completely fill out the form!";
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <?php include("head.php"); ?>
    </head>
    <body>
        <?php include("navbar-reg.php"); ?>
        <main>

        </main>
        <?php include("footer.php"); ?>
        <?php include("script.php"); ?>

        <script type="text/javascript">
            $(document).ready(
                function() {
                    $('.parallax').parallax();
                }
            );
        </script>
    </body>
</html>
