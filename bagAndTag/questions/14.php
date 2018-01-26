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
                    <img src="../images/cds01.jpg" width=249 height=394 border=2>
                </center>

                <h1 style="margin-bottom:0;">Evaluate the Item</h1>
                <h5 style="margin-top:0;">If you get an answer incorrect, choose another answer and hit "Submit" again</h5>    

                <form  id="form1" action=" ">
                    <p>What should you do with this item?</p>
                    <input type="radio" name="answer" value="0" />Take the Stack of CDs<br/>
                    <input type="radio" name="answer" value="1" />Leave the Stack of CDs<br/>
                    <input type="radio" name="answer" value="2" />Further Evaluation<br/>

                    <input type="submit" value="Submit">
                </form>

                <p><span id="response"></span></p>
                <p id="response"></p>

            </article>
        </div>
        
        <center>
            <a href="13.php" class="previous">&laquo; Previous</a>
            |
            <a href="14.php" class="reload">Reload</a>
            |
            <a href="15.php" class="next">Next &raquo;</a>
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
    
                remove_image();
                show_image('../images/cds02.jpg', 225, 226, 2);

                if (answer == 0) {
                    response = "This is incorrect. The stack of CDs should be further evaluated to see if there is anything written to the CDs. Don't take them with you if they are empty. Do not stick them in the computer. Rather, look on the bottom of each one to see if you notice a coating that looks like the CD has been written to."
                };

                if (answer == 1) {
                    response = "This is incorrect. The stack of CDs should be further evaluated to see if there is anything written to the CDs. Take them with you if they are written to since it could have evidence on them. Do not stick them in the computer. Rather, look on the bottom of each one to see if you notice a coating that looks like the CD has been written to."
                };

                if (answer == 2) {
                    response = "Correct! Upon further evaluation, you will be able to determine if the CDs have been written to. This could be evidence. Do not stick them in the computer. Rather, look on the bottom of each one to see if you notice a coating that looks like the CD has been written to. Take them if they have been written to and leave them otherwise."
                };

                document.getElementById("response").innerHTML = response;
                return false; // required to not refresh the page; just leave this here
            }; //this ends the submit function
        </script>
    </body>
</html>