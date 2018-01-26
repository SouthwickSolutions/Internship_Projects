<?php
    require '../randomgeneratorfiles/randombin.php';
?>

<html>
    <body>
        <h1>Binary to Hexadecimal Conversion</h1>
        <p>Convert <?php $generatednumber=randombin();?> to hexadecimal (do not include the # and letters must be lowercase):</p>
        <form action="../conversionfiles/bintohexconvert.php" method="post">
            <input type='hidden' name='generatednumber' value='<?php echo "$generatednumber";?>'/> 
            <input type="text" name="studentanswer">
            <input type="submit">
            <input type="button" onclick="window.location='bintohex.php'" value="Try Another"/>
        </form>
    </body>
</html>