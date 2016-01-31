<?php

?>

<!DOCTYPE html>
<html>
    <head>
        <?php include("head.php"); ?>

<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css"/>

<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.min.js"></script>
    </head>
    <body>
        <?php include("navbar.php"); ?>
        <main>
            <div class="parallax-container valign-wrapper" style="height: 91vh;">
                <div class="parallax"><img class="responsive-img" src="/images/bg.png"></div>
            </div>
            <div class="container">
                <div class="section">
                    <h3 class="center black-text section-header wow slideInUp">What is Jarate?</h3>
                    <div class="row">
                        <div class="col s4 m2 wow slideInUp">
                            <h2 class="center black-text"><i class="material-icons medium">verified_user</i></h2>
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
                            <h2 class="center black-text"><i class="material-icons medium">room</i></h2>
                        </div>
                        <div class="col s8 m4 wow slideInUp">
                            <h4 class="black-text col-content">Widespread Influence</h4>
                            <p>With integration of the IBM Watson Language Identification API, we were able to identify and translate (beta) different languages in order to bring our app into international markets.</p>
                        </div>
                        <div class="col s4 m2 wow slideInUp">
                            <h2 class="center black-text"><i class="material-icons medium">redeem</i></h2>
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
                    <img class="responsive-img" src="logo.png">
                </div>
            </div>
            <div id="mockup" class="container">
                
<style>
    #slideShowImages { /* The following CSS rules are optional. */
      border: 1px gray solid;
      background-color: lightgray;
    }   
  
    #slideShowImages img { /* The following CSS rules are optional. */
      border: 0.8em black solid;
      padding: 3px;
    }   
  </style>

<body>
  <div id="slideShowImages">
    <img src="images/bg%20copy.png" alt="Slide 1" />
    <img src="images/bg.png" alt="Slide 2" />
    <img src="images/bg%20copy.png" alt="Slide 3" />    
    <img src="images/bg%20copy.png" alt="Slide 4" />
  </div>  
  <button id="slideShowButton"></button> <!-- Optional button element. -->
  <script src="js/jquery.slides.js"></script>
</body>

</html>
                
                <div class="center wow slideInUp single-item">
                    <div>
                    <img class="responsive-img" src="Feedback.png">
                    </div>
                    <div><img class="responsive-img" src="CapturePhotoPage.png">
                    </div>
                    <div><img class="responsive-img" src="phone.png">
                    </div>
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
