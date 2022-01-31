//Michael Pacholarz
//September 26, 2021
//ISTE240 Exercise 4–JavaScript Part 1

function jsStyle() {
    // function to change style
    // Change the color and the size of the font
    // in the paragraph with id='text'
    document.getElementById('text').style.color="blue";
    document.getElementById('text').style.fontFamily = "Impact,Charcoal,sans-serif";
}

function getFormValues() {
    // function to send first and last names
    // to an 'alert' message.
    var x = document.getElementById('fname').value;
    var y = document.getElementById('lname').value;
    alert(x + " " + y);

}

function getOptions() {
	// function to display the number of options in an alert()
	var x = document.getElementById("mySelect").options.length;
	alert("number of options: " + x);

}

//put a mouseover and a mouseout event on the p tag below
//create a function that is called on the mouseover that turns the text red
function mouseover() {
    document.getElementById('rb').style.color="red";
}
//create a function that is called on the mouseout that turns the text black
function mouseout() {
    document.getElementById('rb').style.color="black";
}

// code two functions multiply and divide functions here
//hints:
//when you get a value out of an input, you are getting a string.  To get a number, use parseInt()
//When you want to output something into the HTML you can use .innerHTML - like document.getElementById("result").innerHTML= "fred";
function divide(){
    var x = document.getElementById('firstoperand').value;
    var y = document.getElementById('secondoperand').value;
    var z = x/y;
    document.getElementById('result').innerHTML = z;
}
function multiply(){
    var x = document.getElementById('firstoperand').value;
    var y = document.getElementById('secondoperand').value;
    var z = x*y;
    document.getElementById('result').innerHTML = z;
}