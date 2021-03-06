<!DOCTYPE html>
<html>
    <head>
        <title>Bag and Tag Quiz</title>
        <?php include('../QuizStyle.php');?>
    </head>
    <body>
        <div class="container">


            <?php 
                include('../QHeader.php');
                include('../Qnav.php')
            ?>

            <article>
                <center id="afterquestion">
                    <img src="../images/canary01.jpg" width=268 height=377 border=2>
                </center>

                <h1 style="margin-bottom:0;">Evaluate the Item</h1>
                <h5 style="margin-top:0;">If you get an answer incorrect, choose another answer and hit "Submit" again</h5>    

                <form  id="form1" action=" ">
                    <p>What should you do with this item?</p>
                    <input type="radio" name="answer" value="0" />Take the Wireless Hotspotter<br/>
                    <input type="radio" name="answer" value="1" />Leave the Wireless Hotspotter<br/>
                    <input type="radio" name="answer" value="2" />Further Evaluation<br/>

                    <input type="submit" value="Submit">
                </form>

                <p><span id="response"></span></p>
                <p id="response"></p>

            </article>
        </div>
        
        <center>
            <a href="07.php" class="previous">&laquo; Previous</a>
            |
            <a href="08.php" class="reload">Reload</a>
            |
            <a href="09.php" class="next">Next &raquo;</a>
        </center>

        <script>
            function show_image(src, width, height, border) {
                var img = document.createElement("img");
                img.src = src;
                img.width = width;
                img.height = height;
                img.border = border;
                img.id = "image";

                // This next line will just add it to the "afterquestion" id tag
                document.getElementById("afterquestion").appendChild(img);
            };
            
            function remove_image(){
                var image = document.getElementById("image");
                if (image != null) {
                    image.parentNode.removeChild(image);
                };
            }

            document.getElementById("form1").onsubmit=function() {
                answer = parseInt(document.querySelector('input[name = "answer"]:checked').value);

                if (answer == 0) {
                    response = "This is incorrect. A wireless hotspotter has no internal memory and is not important. You can leave it. If you are not sure what a wireless hotspotter is, don't forget it is important you do some basic research on the devices you plan on examining."
                };

                if (answer == 1) {
                    response = "Correct! A wireless hotspotter has no internal memory and therefore you do not need to bring it with you."
                };

                if (answer == 2) {
                    response = "This is incorrect. A wireless hotspotter has no internal memory and is not important. You can leave it. If you are not sure what a wireless hotspotter is, don't forget it is important you do some basic research on the devices you plan on examining."
                };

                document.getElementById("response").innerHTML = response;
                return false; // required to not refresh the page; just leave this here
            }; //this ends the submit function
        </script>
    </body>
</html>