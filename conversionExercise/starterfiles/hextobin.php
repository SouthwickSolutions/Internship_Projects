<?php
    require '../randomgeneratorfiles/randomhex.php';
?>

<html>
    <body>
        <h1>Hexadecimal to Binary Conversion</h1>
        <p>Convert #<?php $generatednumber=randomhex();?> to binary (no spaces):</p>
        <form action="../conversionfiles/hextobinconvert.php" method="post">
            <input type='hidden' name='generatednumber' value='<?php echo "$generatednumber";?>'/> 
            <input type="text" name="studentanswer">
            <input type="submit">
            <input type="button" onclick="window.location='hextobin.php'" value="Try Another"/>
        </form>
    </body>
</html>