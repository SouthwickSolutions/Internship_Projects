<?php
    require '../randomgeneratorfiles/randomdec.php';
?>

<html>
    <body>
        <h1>Decimal to Hexadecimal Conversion</h1>
        <p>Convert <?php $generatednumber=randomdec();?> to hexadecimal (do not include the # and letters must be lowercase):</p>
        <form action="../conversionfiles/dectohexconvert.php" method="post">
            <input type='hidden' name='generatednumber' value='<?php echo "$generatednumber";?>'/> 
            <input type="text" name="studentanswer">
            <input type="submit">
            <input type="button" onclick="window.location='dectohex.php'" value="Try Another"/>
        </form>
    </body>
</html>