//sets the quotes text file and supporting variables
var textFile = "./quotes.txt";
var lines = [];
var numberOfLinesInFile;
var currentLine = 0;





//sets variables to HTML IDs
var buttonBox = document.getElementById('buttonBox');
var startButton = document.getElementById('startButton');
var exerciseBox = document.getElementById('exerciseBox');
var binaryBox = document.getElementById('binaryBox');
var binaryText = document.getElementById('binaryText');
var textBox = document.getElementById('textBox');
var textInput = document.getElementById('textInput');
var checkAnswerButton = document.getElementById('checkAnswerButton');
var nextButton = document.getElementById('nextButton');





//this is what happens when the page loads
window.onload = function(){
    //fetches the resource (the text file) and adds each line to an array (lines)
    fetch(textFile)
        .then(response => response.text())
        .then(text => lines = text.split("\n"));
};




//give the page load a breather and then set these variables
window.setTimeout(function(){
    //sets the number of lines in the file for later use
    numberOfLinesInFile = lines.length;
    startButton.style.display="block";
}, 3000)






//this is what happens when the START button is clicked
startButton.onclick = function(){
    
    //debugginh
    console.log("Start. Current line: ", currentLine);
    console.log("Start. Number of Lines in File: ", numberOfLinesInFile);
    
    if(currentLine > numberOfLinesInFile){
        alert("Something went wrong. Please alert Professor Cantrell...");
        return;
    }else{
        
        //the START button disappears
        buttonBox.style.display = 'none';

        //exerciseBox appears with the first question
        exerciseBox.style.display = 'block';

        //binaryBox appears with the quote to translate
        binaryBox.style.display = 'block';
        binaryText.innerHTML = lines[currentLine];

        //textBox appears with the input field
        textBox.style.display = 'block';
        textInput.style.display = 'inline';
        textInput.placeholder = "Enter Answer";

        //CHECK ANSWER button appears
        checkAnswerButton.style.display = 'block';
        
        currentLine++;
        
        //debugging
        console.log("Start button hit. Current line: ", currentLine);
        console.log("Start button hit. Number of Lines in File: ", numberOfLinesInFile);
    }
}





//this is what happens when the CHECK ANSWER button is clicked
checkAnswerButton.onclick = function(){
    
    //the CHECK ANSWER button disappears
    checkAnswerButton.style.display = 'none';
    
    //binaryBox changes the contents to the answer
    binaryText.innerHTML = lines[currentLine];
    
    //the NEXT button appears
    nextButton.style.display = 'block';
    
    currentLine++;
    
    //debugging
    console.log("Check button hit. Current line: ", currentLine);
    console.log("Check button hit. Number of Lines in File: ", numberOfLinesInFile);
}





//this is what happens when the NEXT button is clicked
nextButton.onclick = function(){
    
    //debugging
    console.log("Next button hit. Current line: ", currentLine);
    console.log("Next button hit. Number of Lines in File: ", numberOfLinesInFile);
    
    if(currentLine >= numberOfLinesInFile){
        currentLine = 0;
    }
    
    //the NEXT button disappears
    nextButton.style.display = 'none';
    //textInput resets input
    textInput.value = "";
    
    //the CHECK ANSWER button appears
    checkAnswerButton.style.display = 'block';
    
    //binaryBox changes the contents to the next question
     binaryText.innerHTML = lines[currentLine];
    
    currentLine++;

    //debugging
    console.log("Finish. Current line: ", currentLine);
    console.log("Finish. Number of Lines in File: ", numberOfLinesInFile);
}