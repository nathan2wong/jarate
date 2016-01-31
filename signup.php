<?php
    include("initialize.php");
    if(isset($_SESSION['user'])){
        header("Location: home");
        die;
    }
    $msg = "";
    if(isset($_POST['submit'])) {

        if($_POST['fname'] != null && $_POST['pass'] != null && $_POST['check-pass'] != null && $_POST['email'] != null && $_POST['lname'] != null) {

            $user = stripslashes($_POST['email']);
            $pass = sha1(stripslashes($_POST['pass']));
            $fname = stripslashes($_POST['fname']);
            $lname = stripslashes($_POST['lname']);

                echo "<script>console.log(\"Swag money\");</script>";
                $max = $connect->query("SELECT * FROM `users` ORDER BY `ID` DESC LIMIT 1");
                                echo "<script>console.log(\"Enter\")</script>";
                $max = mysqli_fetch_array($max);
                $max = $max['ID'] + 1;
                            echo "<script>console.log(\",$max,"\")</script>";
                $connect->query("INSERT INTO `users` (`1`, `2`, `3`, `4`, `5`, `6`, `7, `day`, `ID`, `fname`, `lname`, `email`, `pass`) VALUES(0, 0, 0, 0, 0, 0, 0, 0, $max, '$fname', '$lname', '$user', '$pass')");
                $msg = "Successfully created account!";
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
                <h2 class="center section-header">Sign Up!</h2>
                <p><?=$msg; ?></p>
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
                            <input id="pass" name="pass" type="password">
                            <label for="pass">Password</label>
                        </div>
                        <div class="input-field col s12 l6">
                            <input id="check-pass" name="check-pass" type="password">
                            <label for="check-pass">Password Check</label>
                        </div>
                    </div>
                    <button id="submit" name="submit" class="btn-large waves-block waves-effect waves-light center-align" type="submit" style="margin: auto;">Submit
                        <i class="material-icons left">send</i>
                    </button>
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
