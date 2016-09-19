//var mahLogin = /^[a-zA-Z]{2,3}\d{5,6}$/;
//var mahPass = /^[a-zA-Z]{2}\d{4}$/;

try{
    var email = /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+(?:[A-Z]{2}|com|org|net|edu|gov|mil|biz|info|mobi|name|aero|asia|jobs|museum)\b$/;
}catch(err){
    alert("Error: " + err);
}


function validate(){
    var inputA ="kocmoc1985@gmail.com";

    //Kontroll av datorid
    if(inputA.search(email)==-1){//id st?mmer inte
        alert("wrong email");
       
    }else{ //ta bort felmeddelande om giltigt datorid
        alert("email ok");
    }
}

function addE(elemToAddTo, eventType, eventFunction) {
    if( elemToAddTo.addEventListener) {
        //Detta är mozilla!
        elemToAddTo.addEventListener(eventType, eventFunction, false );
        return true;
    }
    else if( elemToAddTo.attachEvent ) {
        //Detta är IE!
        var returnval = elemToAddTo.attachEvent( "on" + eventType, eventFunction );
        return returnval;
    }else{
        return false;
    }
}

addE(window, "load", validate);