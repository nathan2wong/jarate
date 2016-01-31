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
            <div class = "results">
                <h1 text-align:center>Have a message in a different language?</h1>
            <?php
     
 function testLangID($data) {
     $curl = curl_init();
     
     $post_args = array(
         'txt' => $data,
         'sid' => 'lid-generic',
         'rt' => 'json' 
     );
     
     curl_setopt($curl, CURLOPT_POST, true);
     curl_setopt($curl, CURLOPT_POSTFIELDS, $post_args);
     curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
     curl_setopt($curl, CURLOPT_USERPWD, "0c4d9ec3-90b3-49e4-b44b-a611eb275d9e:Ylgt1EgrXimL");
     curl_setopt($curl, CURLOPT_URL, "https://gateway.watsonplatform.net/language-translation/api/v2/identify");
     curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
 
     $result = curl_exec($curl);
     
     
     curl_close($curl);
     $decoded = json_decode($result, true);
     $cancer = $decoded['languages'][0]['language'];
     
     var_dump($cancer);
     return $decoded;
 }
 // define variables and set to empty values
 $textLID = "";
 $textLIDErr = "";
 $textLang = "";
 
 if ($_SERVER["REQUEST_METHOD"] == "POST") {  
    if (empty($_POST["textLID"])) {
      $textLIDErr = "Text is required (at least 3 words)";
    } else {
      $textLID = test_input($_POST["textLID"]);
    }
 }
 
 $textLang = testLangID($textLID);
 
 function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
 }
 ?>
 
     <table>
         <tr>
             <td style='width: 30%;'><img class = 'newappIcon' src='images/newapp-icon.png'>
             </td>
             <td>
                 <h2>Watson Language Identification</h2>
                 <p><span class="error">* required field.</span></p>
                 <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<input type="submit" value ="<?php echo "jarate";?>"></input>
                     Enter text to identify language: <textarea name="textLID" rows="5" cols="40"><?php echo $textLID;?></textarea>
                       
                     <span class="error">* <?php echo $textLIDErr;?></span>
                       
  
                     <input type="submit" name="submit" value="Submit">
                 </form>
             
                 <?php
                 echo "<h2>Text language: </h2>";
                 echo $textLang["lang"];
                 ?>
             </td>
         </tr>
     </table>
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
