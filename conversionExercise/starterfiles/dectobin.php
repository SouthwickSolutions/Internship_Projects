<?php
    require '../randomgeneratorfiles/randomdec.php';
?>

<html>
    <body>
        <h1>Decimal to Binary Conversion</h1>
        <p>Convert <?php $generatednumber=randomdec();?> to binary (do not include spaces):</p>
        <form action="../conversionfiles/dectobinconvert.php" method="post">
            <input type='hidden' name='generatednumber' value='<?php echo "$generatednumber";?>'/> 
            <input type="text" name="studentanswer">
            <input type="submit">
            <input type="button" onclick="window.location='dectobin.php'" value="Try Another"/>
        </form>
    </body>
</html>