<?php
    include("initialize.php");
    if(isset($_SESSION['user'])){

    }
    include("variables.php");

?>

<!DOCTYPE html>
<html>
    <head>
        <?php include("head.php"); ?>
    </head>
    <body>
        <header>
            <?php include("navbar.php"); ?>
        </header>

        <main>
            <div class="container" style="margin-top: 1em;">
                <div class="row center valign-wrapper">
                    <div id="user-image" class="col s12 m9">
                        <img class="z-depth-3" src="#" alt="http://placehold.it/400x575">
                    </div>
                    <div class="col s12 m3">
                        <form action="#">
                            <div class="file-field input-field valign">
                                <div class="btn">
                                    <i class="material-icons">perm_media</i>
                                    <span>Choose Image!</span>
                                    <input type="file" onChange="readUrl(this);">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>

        <?php include("footer.php"); ?>
        <?php include("script.php"); ?>

        <script type="text/javascript">
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#blah')
                            .attr('src', e.target.result)
                            .width(150)
                            .height(200);
                    };

                    reader.readAsDataURL(input.files[0]);
                }
            }
        </script>
    </body>
</html>
