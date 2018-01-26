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
                    <img src="../images/cardreader01.jpg" width=449 height=214 border=2>
                    <img src="../images/cardreader02.jpg" width=369 height=123 border=2>
                </center>

                <h1 style="margin-bottom:0;">Evaluate the Item</h1>
                <h5 style="margin-top:0;">If you get an answer incorrect, choose another answer and hit "Submit" again</h5>    

                <form  id="form1" action=" ">
                    <p>What should you do with this item?</p>
                    <input type="radio" name="answer" value="0" />Take the Kodak Card Reader<br/>
                    <input type="radio" name="answer" value="1" />Leave the Kodak Card Reader<br/>
                    <input type="radio" name="answer" value="2" />Further Evaluation<br/>

                    <input type="submit" value="Submit">
                </form>

                <p><span id="response"></span></p>
                <p id="response"></p>

            </article>
        </div>
        
        <center>
            <a href="14.php" class="previous">&laquo; Previous</a>
            |
            <a href="15.php" class="reload">Reload</a>
            |
            <a href="16.php" class="next">Next &raquo;</a>
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
                    response = "This is partly correct. Only take this with you if you need it. A card reader has no internal memory and shouldn't be taken otherwise."
                };

                if (answer == 1) {
                    response = "This is partly correct. Only leave this if you don't need it. A card reader has no internal memory and doesn't need to be taken unless you need it to read memory cards."
                };

                if (answer == 2) {
                    response = "This is partly correct. After further evaluating, you need to decide if you need this card reader or not. If you need it, take it with you. If you do not need it, leave it at the scene."
                };

                document.getElementById("response").innerHTML = response;
                return false; // required to not refresh the page; just leave this here
            }; //this ends the submit function
        </script>
    </body>
</html>