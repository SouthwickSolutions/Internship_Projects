<?php
 
    $generatednumber = $_POST['generatednumber'];
    $studentanswer = $_POST['studentanswer'];
    $answer = dechex($generatednumber);

?>

<html>
    <body>
        <script>
            var phpanswer = "<?php echo $answer; ?>";
            function showsolutionfunction(){
                document.getElementById('phpdiv').innerHTML = "";
                document.getElementById('showsolutiondiv').innerHTML += phpanswer;
            }
        </script>
        <h1>Decimal to Hexadecimal Conversion</h1>
        <div id="showsolutiondiv"></div>
        <div id="phpdiv">
            <?php
                if($answer == $studentanswer){
                    echo 'correct!';
                    echo "<br><br>";
                    echo "<style>
                            .form1{
                                display:none;
                            }
                          </style>
                          <form action=\"../starterfiles/dectohex.php\">
                                <input type=\"submit\" value=\"Try Another\"/>
                          </form>
                          <form action=\"../home.php\">
                                <input type=\"submit\" value=\"Return to Menu\"/>
                          </form>
                          ";

                } elseif($answer != $studentanswer){
                    echo 'try again';
                }
            echo '<br>';
            ?>
        </div>
        <p class="form1">Convert <?php echo $generatednumber;?> to hexadecimal (do not include the # and letters must be lowercase):</p>
        <div class="form1">
            <form action="dectohexconvert.php" method="post">
                <input type='hidden' name='generatednumber' value='<?php echo "$generatednumber";?>'/> 
                <input type="text" name="studentanswer">
                <input type="submit">
                <input type="button" onclick="window.location='../starterfiles/dectohex.php'" value="Try Another"/>
                <input type="button" name="showsolutionbutton" id="showsolutionbutton" onclick="showsolutionfunction();" value="Show Solution"/>
                <input type="button" name="returntomenu" id="returntomenu" onclick="location.href = '../home.php';" value="Return to Main Menu"/>
            </form>
        </div>
    </body>
</html>