<?php

?>

<!DOCTYPE html>
<html>
    <head>
        <?php include("head.php"); ?>
    </head>
    <body>
        <?php include("navbar.php"); ?>
        <main>
            <div class="parallax-container valign-wrapper" style="height: 91vh;">
                <div class="parallax"><img class="responsive-img" src="/images/bg.jpg"></div>
            </div>
            <div class="container">
                <div class="section">
                    <h3 class="center black-text section-header wow slideInUp">What is Jarate?</h3>
                    <div class="row">
                        <div class="col s4 m2 wow slideInUp">
                            <h2 class="center black-text"><i class="material-icons medium">perm_identity</i></h2>
                        </div>
                        <div class="col s8 m4 wow slideInUp">
                            <h4 class="black-text col-content">Accuracy</h4>
                            <p>Jarate uses a machine learning algorithm to analyze your urine data in order to yield your approximae dehydration rate and how much water you should drink to stay hydrated.</p>
                        </div>
                        <div class="col s4 m2 wow slideInUp">
                            <h2 class="center black-text"><i class="material-icons medium">perm_identity</i></h2>
                        </div>
                        <div class="col s8 m4 wow slideInUp">
                            <h4 class="black-text col-content">Personalized</h4>
                            <p>If you choose to subscribe to our serivce by creating an user account, we can help you track your urine data and create charts and graphs to detail your change over time.</p>
                        </div>
                        <div class="col s4 m2 wow slideInUp">
                            <h2 class="center black-text"><i class="material-icons medium">perm_identity</i></h2>
                        </div>
                        <div class="col s8 m4 wow slideInUp">
                            <h4 class="black-text col-content">Widespread Influence</h4>
                            <p>With integration of the IBM Watson Language Identification API, we were able to identify and translate (beta) different languages in order to bring our app into international markets.</p>
                        </div>
                        <div class="col s4 m2 wow slideInUp">
                            <h2 class="center black-text"><i class="material-icons medium">perm_identity</i></h2>
                        </div>
                        <div class="col s8 m4 wow slideInUp">
                            <h4 class="black-text col-content">Constantly Evolving</h4>
                            <p>At Jarate, we take pride in our ability to evolve and develop to constantly roll out new features. Some of our future plans include releasing this application to iOS and Andriod markets.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="parallax-container" style="height: 45vh;">
                <div class="parallax">
                    <img class="responsive-img" src="http://placehold.it/500x400">
                </div>
            </div>
            <div id="mockup" class="container">
                <div class="center wow slideInUp">
                    <img class="responsive-img" src="http://placehold.it/500x400">
                </div>
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
