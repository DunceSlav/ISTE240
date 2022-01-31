//Michael Pacholarz
//October 7, 2021
//ISTE240 Exercise 5

function $(id){
    return document.getElementById(id);
}

function moveRight(){
    $('text').style.left = parseInt($('text').style.left) + 10 + 'px';
}

function howMany(){
    var length = $('regForm').length;
    var y = 0;
    for (let i = 0; i < length; i++) {
        if(document.getElementsByTagName('input')[i].getAttribute('type') == 'text'){
            y++;
        }
    }
    alert("Number of inputs with type text: " + y);
}

function colorChanger(){
    var x = $('mySelect').selectedOptions[0].value;
    $('5c').style.backgroundColor = x;
}

function changeColor(){
    var x = $('mySelect').selectedOptions[0].value;
    $('mySelect').style.color = x;
}

function textNode(){
    var x = $('mySelect').selectedOptions[0].value;
    var t = document.createTextNode("Selected color is: " + x + " ");
    $('5c').appendChild(t);
}