<?php
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
                        <img class="z-depth-3" id="myImg" src="#" alt="Upload your image!" height="575px" width="400px" />
                    </div>
                        <div class="col s12 m3">
                        <p id="info">
                             <p>
                                    <ol>
                                        <li>1. Take a picture of your urine save it onto your computer. </li>
                                        <li>2. Click 'Choose Image!' and then click on the target area of your urine that most accurately resembles your excretions.</li>
                                    </ol>
                                </p>
                                    <br />

                        </p>
                        <br />
                        <form action="#">
                            <div class="file-field input-field valign">
                                <div class="btn">
                                    <span>Choose Image!</span>
                                    <input type="file" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>

        <?php include("footer.php"); ?>
        <?php include("script.php"); ?>
        <script type="text/javascript" src="js/main.js"></script>

        <script type="text/javascript">
            $(function () {
                $(":file").change(function () {
                    if (this.files && this.files[0]) {
                        var reader = new FileReader();
                        reader.onload = imageIsLoaded;
                        reader.readAsDataURL(this.files[0]);
                    }
                });
            });
            function imageIsLoaded(e) {
                $('#myImg').attr('src', e.target.result);
            };
            var pixelData = null;
            $(function() {
                $('img').mousedown(function(e) {
                    if(!this.canvas) {
                        this.canvas = $('<canvas />')[0];
                        this.canvas.width = this.width;
                        this.canvas.height = this.height;
                        this.canvas.getContext('2d').drawImage(this, 0, 0, this.width, this.height);
                    }
                    pixelData = this.canvas.getContext('2d').getImageData(event.offsetX, event.offsetY, 1, 1).data;
                    //alert(pixelData);
                    hydrate();
                });
            });

            function hydrate() {
                var one = percentage(red, green, percentage, pixelData[0], pixelData[1]);
                // var two = percentage(green, blue, percentage, pixelData[1], pixelData[2]);
                // var three = percentage(blue, red, percentage, pixelData[2], pixelData[0]);
                temp = one;
                alert(temp);
            }
        </script>
    </body>
</html>
