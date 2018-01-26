<?php
    require '../randomgeneratorfiles/randomhex.php';
?>

<html>
    <body>
        <h1>Hexadecimal to Decimal Conversion</h1>
        <p>Convert #<?php $generatednumber=randomhex();?> to decimal:</p>
        <form action="../conversionfiles/hextodecconvert.php" method="post">
            <input type='hidden' name='generatednumber' value='<?php echo "$generatednumber";?>'/> 
            <input type="text" name="studentanswer">
            <input type="submit">
            <input type="button" onclick="window.location='hextodec.php'" value="Try Another"/>
        </form>
    </body>
</html>