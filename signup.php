<?php
    include("initialize.php");
    if(isset($_SESSION['user'])){
        header("Location: home");
        die;
    }
    $msg = "";
    if(isset($_POST['login'])) {
        if($_POST['fname'] != null && $_POST['pass'] != null && $_POST['check-pass'] != null && $_POST['email'] != null && $_POST['lname'] != null) {
            $user = stripslashes($_POST['email']);
            $pass = sha1(stripslashes($_POST['pass']));
            $fname = stipslashes($_POST['fname']);
            $lname = stipslashes($_POST['lname']);
            $query = $connect->query("SELECT * FROM `users` WHERE `email`='$user' AND `pass` = '$pass' LIMIT 1");
            if($query->num_rows < 0) {
                $connect->query("INSERT INTO `users` (`ID`, `fname`, `lname`, `email`, `pass`) VALUES()");
                $max = $connect->query("SELECT * FROM `users` ORDER BY `ID` DESC LIMIT 1");
                $max = mysqli_fetch_array($max);
                $max = $max['ID'] + 1;
                $connect->query("INSERT INTO `users` (`ID`, `fname`, `lname`, `email`, `pass`) VALUES($max, '$fname', '$lname', '$user', '$pass')");
                $msg = "Successfully created account!";
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
            <div class="container">
                <form method="post">
                    <div class="row">
                        <div class="input-field col s12 l6">
                            <input id="fname" name="fname" type="text">
                            <label for="fname">First Name</label>
                        </div>
                        <div class="input-field col s12 l6">
                            <input id="lname" name="lname" type="text">
                            <label for="lname">Last Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="email" name="email" type="text">
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 l6">
                            <input id="pass" name="pass" type="text">
                            <label for="pass">Password</label>
                        </div>
                        <div class="input-field col s12 l6">
                            <input id="pass-check" name="pass-check" type="text">
                            <label for="pass-check">Password Check</label>
                        </div>
                    </div>
                </form>
            </div>
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
