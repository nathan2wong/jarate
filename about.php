<?php

?>

<!DOCTYPE html>
<html>
    <head>
        <?php include("head.php"); ?>
    </head>
    <div class ="main">
        <p>Jarate is an intelligently designed web and mobile application that can wtrack the user's urine input and output the user's dehydration rate, amount of water needed to drink, and more (such as sleeping time and accessibility for other applications based on color. Coming soon.).</p>

        <p>With use of machine learning algorithms in order to optimize the difference between the RGB indices of the reference datapoints, we were able to develop an application that was both applicable in purpose and simple to use. These reference points were acquired from several credible sources we found online. We used the Microsoft Azure platform to perform much of the coding in this project.</p>

        <p>In addition, we incorporated the IBM Watson Language Identification API in order to allow user functionality for other native languages, such as Spanish and Chinese (however, this is still a work in progress).</p>

        <p>Overall, Jarate is an application that can bring both great social help to those who want to watch their health as well as maintain a simple and interactive interface with great expansive and helpful possibilities.</p>

----- 
        <div style = "text-align:center">
<p>Sources
    Prevention,. 2014. "What The Color Of Your Pee Says About Your Health". Accessed January 31 2016. http://www.prevention.com/health/what-color-your-pee-says-about-your-health.</p>

            <p>Images.sampletemplates.com,. 2016. Accessed January 31 2016. http://images.sampletemplates.com/wp-content/uploads/2015/06/Urine-Color-Chart-Dehydration.jpg.</p>

            <p>Cs229.stanford.edu,. 2016. Accessed January 31 2016. http://cs229.stanford.edu/proj2014/David%20Frankl,Machine%20Learning%20In%20JavaScript.pdf.</p>

            <p>Sciencedirect.com,. 2016. " A Region Growing And Merging Algorithm To Color Segmentation ". Accessed January 31 2016. http://www.sciencedirect.com/science/article/pii/S0031320396001471.</p>

            <p>Ccs.neu.edu,. 2016. Accessed January 31 2016. http://www.ccs.neu.edu/home/ekanou/ISU535.09X2/Handouts/Review_Material/zipfslaw.pdf.</p>

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
