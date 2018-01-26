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
                    <img src="../images/tissue01.jpg" width=260 height=291 border=2>
                </center>

                <h1 style="margin-bottom:0;">Evaluate the Item</h1>
                <h5 style="margin-top:0;">If you get an answer incorrect, choose another answer and hit "Submit" again</h5>    

                <form  id="form1" action=" ">
                    <p>What should you do with this item?</p>
                    <input type="radio" name="answer" value="0" />Take the box of Kleenex<br/>
                    <input type="radio" name="answer" value="1" />Leave the box of Kleenex<br/>
                    <input type="radio" name="answer" value="2" />Further Evaluation<br/>

                    <input type="submit" value="Submit">
                </form>

                <p><span id="response"></span></p>
                <p id="response"></p>

            </article>
        </div>
        
        <center>
            <a href="28.php" class="previous">&laquo; Previous</a>
            |
            <a href="29.php" class="reload">Reload</a>
            |
            <a href="30.php" class="next">Next &raquo;</a>
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
                show_image('../images/tissue02.jpg', 246, 206, 2);

                if (answer == 0) {
                    response = "This is incorrect. After further evaluation, you find a password on a post-it note on the bottom. Photograph the password and leave the box."
                };

                if (answer == 1) {
                    response = "This is incorrect. You should evaluate the box and if you did, you would have noticed a password on a post-it note on the bottom. Photograph the password and leave the box."
                };

                if (answer == 2) {
                    response = "Correct! Upon further evaluation, you will find a password on a post-it note on the bottom. Photograph the password and leave the box."
                };

                document.getElementById("response").innerHTML = response;
                return false; // required to not refresh the page; just leave this here
            }; //this ends the submit function
        </script>
    </body>
</html>