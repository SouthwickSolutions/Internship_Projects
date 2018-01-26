<?php
    require '../randomgeneratorfiles/randombin.php';
?>

<html>
    <body>
        <h1>Binary to Decimal Conversion</h1>
        <p>Convert <?php $generatednumber=randombin();?> to decimal. Note that the answer is between 0 and 256:</p>
        <form action="../conversionfiles/bintodecconvert.php" method="post">
            <input type='hidden' name='generatednumber' value='<?php echo "$generatednumber";?>'/> 
            <input type="text" name="studentanswer">
            <input type="submit">
            <input type="button" onclick="window.location='bintodec.php'" value="Try Another"/>
        </form>
    </body>
</html>