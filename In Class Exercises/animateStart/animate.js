var moving; //holding if I'm moving - instansiate the mooving variable on the global level
//nice shortcut function
function $(id){
    return document.getElementById(id);
}
function $$(name,number){
    return document.getElementsByTagName(name)[number];
}
//function move it to the right
function moveRight(){
    //make it slide
    stopIt();
    //make it slide
    //$('thingToMove').style.left = parseInt($('thingToMove').style.left) + 10 + 'px';
    //setTimeout(moveRight, 10);

    //now slide on
    $('thingToMove').style.left = parseInt($('thingToMove').style.left) + 1 + 'px';
    moving = setTimeout(moveRight,10);

    //leave the script in order to see the animation
}
function moveLeft(){
    stopIt();
    $('thingToMove').style.left = parseInt($('thingToMove').style.left) - 1 + 'px';
    moving = setTimeout(moveLeft,10);
}

function stopIt(){
    //need to stop the timeout
    clearTimeout(moving);
}

function fadeOut(){
    if(parseFloat($('thingToMove').style.opacity) >= 0){
        $('thingToMove').style.opacity = parseFloat($('thingToMove').style.opacity) - 0.01;
        //make it repeat
        setTimeout(fadeOut,10);
        //disable the fadeIn button 
        document.getElementsByTagName('button')[4].disabled=true;
    }
    else{
        //enable the button
        document.getElementsByTagName('button')[4].disabled=false;
    }
}
function fadeIn(){
    if(parseFloat($('thingToMove').style.opacity) <= 1){
        $('thingToMove').style.opacity = parseFloat($('thingToMove').style.opacity) + 0.01;
        setTimeout(fadeIn,10);
        document.getElementsByTagName('button')[3].disabled=true;
    }
    else{
        document.getElementsByTagName('button')[3].disabled=false;
    }
}