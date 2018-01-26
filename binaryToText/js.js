//sets the quotes text file and supporting variables
var textFile = "./quotes.txt";
var lines;

//sets variables to HTML IDs
var buttonBox = document.getElementById('buttonBox');
var startButton = document.getElementById('startButton');
var exerciseBox = document.getElementById('exerciseBox');
var binaryBox = document.getElementById('binaryBox');
var textBox = document.getElementById('textBox');
var checkAnswerButton = document.getElementById('checkAnswerButton');

window.onload = function(){
    fetch(textFile)
        .then(response => response.text())
        .then(text => lines = text.split("\n"));
};

console.log("hi");
for(var i = 0; i < lines.length; i++){
    console.log(lines[i]);
}

//this is what happens when the START button is clicked
startButton.onclick = function(){
    buttonBox.style.display = "none";
}