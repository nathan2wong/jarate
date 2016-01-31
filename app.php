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
                        <form action="#">
                            <div class="file-field input-field valign">
                                <div class="btn">
                                    <i class="material-icons">perm_media</i>
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
            var count = 0;
            $(function () {
                $(":file").change(function () {
                    if (this.files && this.files[count]) {
                        var reader = new FileReader();
                        reader.onload = imageIsLoaded;
                        reader.readAsDataURL(this.files[count]);
                        count += 1;
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
                    alert(pixelData);
                    $('#output').html('R: ' + pixelData[0] + '<br>G: ' + pixelData[1] + '<br>B: ' + pixelData[2] + '<br>A: ' + pixelData[3]);
                });
            });

			var green = [255, 245, 238, 239, 211, 188];
			var red = [255, 244, 233, 230, 158, 117];
			var blue = [255, 172, 55, 1, 0, 1];
			var percents = [0, 16.6, 33.2, 49.8, 65, 71];

			function hydrate() {
				var temp = percentage(red, green, percentage, pixelData[0], pixelData[1]);
				var one = temp[0];
				var two = temp[1];
				temp = percentage(green, blue, percentage, pixelData[1], pixelData[2]);
				var three = temp[0];
				var four = temp[1];
				temp = percentage(blue), red, percentage, pixelData[2], pixelData[0]);
				var five = temp[0];
				var six = temp[0];
				temp = (one + two + three + four + five + six)/6;
				alert(temp);
				return temp;
			}
        </script>
    </body>
</html>
