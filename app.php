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
                        <img class="z-depth-3" src="http://placehold.it/400x575">
                    </div>
                    <div class="col s12 m3">
                        <form action="#">
                            <div class="file-field input-field valign" id="upload-image">
                                <div class="btn">
                                    <i class="material-icons">perm_media</i>
                                    <span>Choose Image!</span>
                                    <input type="file">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </main>

        <?php include("footer.php"); ?>
        <?php include("script.php"); ?>
        <script>
            function handleFileSelect(evt) {
                var files = evt.target.files;
                var f = files[0];
                var reader = new FileReader();

                  reader.onload = (function(theFile) {
                        return function(e) {
                          document.getElementById('user-image').innerHTML = ['<img src="', e.target.result,'" title="', theFile.name, '" width="400px" height="575px" />'].join('');
                        };
                  })(f);

                  reader.readAsDataURL(f);
            }
              document.getElementById('upload-image').addEventListener('change', handleFileSelect, false);
        </script>
    </body>
</html>
