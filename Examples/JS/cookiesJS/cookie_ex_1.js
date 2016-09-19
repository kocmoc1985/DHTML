

function addEvent(elemToAddTo, eventType, eventFunction) {
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



function listCrumbs(displayElementId){
    var text = "";
    var crumbs = document.cookie.split(';');		//cookien delas i delar m.a.p ; tecknet.
    for (var i in crumbs) {  						//för att gå igenom alla smulor(delar) måste vi ha en loop.
        var crumbName = crumbs[i].split('=')[0];		//Splitfunktionen används för att separera namn & värde vid = tecken.
        var crumbValue = crumbs[i].split('=')[1];		//Anledningen till [0]och [1] är att vi vill se båda delarna av smulan, d.v.s både namn och värde.
        text += 'crumb '+ i +						//Skriv ut smula nr löpnummer heter namnet på smulan
        ' name = '+ crumbName +				//och innehåller värdet
        ' |  value = '+crumbValue;
        crumbText = document.createTextNode(text);
        var dElem = document.getElementById(displayElementId)
        dElem.appendChild(crumbText);
        dElem.appendChild(document.createElement("br"));
        text="";
    }
}


function getCrumbValue(crumbName){
    if (document.cookie.length > 0){
        begin = document.cookie.indexOf(crumbName+"=");
        if (begin != -1){ // Notera: != betyder "ej lika med (skiljt från)" alltså om namnet tidigare funnet.
            begin += crumbName.length+1; //begin tilldelas positionens där cookien hittades plats +1
            end = document.cookie.indexOf(";", begin); //end tilldelas positionen där cookiens sluttecken ; hittades.
            if (end == -1){
                end = document.cookie.length;  //om end == -1 gör end-variabeln till längden av cookien.
            }
            return unescape(document.cookie.substring(begin, end)); //ge funktionen getCookie värdet mellan position begin och end.
        } 														//namnet ges alltså till funktionen som returvärde.
    }
    return null; // Värdet "null" returneras från funktionen.
}


function checkCookie()
{
    var name  =  getCrumbValue("name");
    var lname = getCrumbValue("lname");
    
    if (name!=null && name!="")
    {
        alert("Welcome again " + name + " " + lname);
    }
    else
    {
        name=prompt("Please enter your name:","");
        lname = prompt("Please enter your lastname:","");
        if (name!=null && name!="")
        {
            try{
                setCookie("user", "", 365);
                setCookie("name",name,365);
                setCookie("lname",lname,365);
            }catch(err){
                alert(""+err);
            }
        }
    }
    listCrumbs("a");
}



function setCookie(c_name,value,exdays)
{
    var exdate=new Date();
    exdate.setDate(exdate.getDate() + exdays);
    var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
    document.cookie=c_name + "=" + c_value;
}



function go(){
    deleteCrumb("user");
    listCrumbs("a");
}

function deleteCrumb(crumbName){
    var expirationdate=new Date(); //sätter utgångsdatum till dagensdatum
    var oneyearback=expirationdate.getTime()-(365*24*60*60*1000); //sätter variabeln oneyearback till ett år tillbaka.
    expirationdate.setTime(oneyearback);  //sätter expirationdate till ett år tillbaka
    document.cookie = crumbName+"="+";expires= " + expirationdate.toGMTString();
}

//addEvent(window, "load", go);
addEvent(window, "load", checkCookie);