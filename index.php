<?php

?>

<!DOCTYPE html>
<html>
    <head>
        <?php include("head.php"); ?>
    </head>
    <body>
        <nav>
            <div class="nav-wrapper">
                <a href="#" class="brand-logo center">Need a better title</a>
                <a href="#" data-activates="mobile-nav" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul id="nav" class="left hide-on-med-and-down">
                    <li><a href="#">Links</a></li>
                </ul>

                <ul class="side-nav" id="mobile-nav">
                    <li><a href="#">Links</a></li>
                </ul>
            </div>
        </nav>
        <main>
            <div class="parallax-container">
                <div class="parallax"><img src="http://placehold.it/500x400"></div>
            </div>
            <div class="container">
                <p class="center">Swag</p>
            </div>
        </main>
        <footer>

        </footer>
        <?php include("script.php"); ?>

        <script type="text/javascript">
            $(document).ready(function() {
                $('.parallax').parallax();
            )}
        </script>
    </body>
</html>
