

function addEvent(elemToAddTo, eventType, eventFunction) {
    if( elemToAddTo.addEventListener) {
        //Detta �r mozilla!
        elemToAddTo.addEventListener(eventType, eventFunction, false );
        return true;
    }
    else if( elemToAddTo.attachEvent ) {
        //Detta �r IE!
        var returnval = elemToAddTo.attachEvent( "on" + eventType, eventFunction );
        return returnval;
    }else{
        return false;
    }
}



function listCrumbs(displayElementId){
    var text = "";
    var crumbs = document.cookie.split(';');		//cookien delas i delar m.a.p ; tecknet.
    for (var i in crumbs) {  						//f�r att g� igenom alla smulor(delar) m�ste vi ha en loop.
        var crumbName = crumbs[i].split('=')[0];		//Splitfunktionen anv�nds f�r att separera namn & v�rde vid = tecken.
        var crumbValue = crumbs[i].split('=')[1];		//Anledningen till [0]och [1] �r att vi vill se b�da delarna av smulan, d.v.s b�de namn och v�rde.
        text += 'crumb '+ i +						//Skriv ut smula nr l�pnummer heter namnet p� smulan
        ' name = '+ crumbName +				//och inneh�ller v�rdet
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
        if (begin != -1){ // Notera: != betyder "ej lika med (skiljt fr�n)" allts� om namnet tidigare funnet.
            begin += crumbName.length+1; //begin tilldelas positionens d�r cookien hittades plats +1
            end = document.cookie.indexOf(";", begin); //end tilldelas positionen d�r cookiens sluttecken ; hittades.
            if (end == -1){
                end = document.cookie.length;  //om end == -1 g�r end-variabeln till l�ngden av cookien.
            }
            return unescape(document.cookie.substring(begin, end)); //ge funktionen getCookie v�rdet mellan position begin och end.
        } 														//namnet ges allts� till funktionen som returv�rde.
    }
    return null; // V�rdet "null" returneras fr�n funktionen.
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
    var expirationdate=new Date(); //s�tter utg�ngsdatum till dagensdatum
    var oneyearback=expirationdate.getTime()-(365*24*60*60*1000); //s�tter variabeln oneyearback till ett �r tillbaka.
    expirationdate.setTime(oneyearback);  //s�tter expirationdate till ett �r tillbaka
    document.cookie = crumbName+"="+";expires= " + expirationdate.toGMTString();
}

//addEvent(window, "load", go);
addEvent(window, "load", checkCookie);