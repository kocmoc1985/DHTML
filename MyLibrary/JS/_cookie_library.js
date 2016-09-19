//!!The suggested methods for using cookies are!!
//Dont forget the example in the cookiesJS folder in Examples
//1. setPersistentCrumb() - for setting a Cookie
//2. getCrumbValue() - for getting the required Crumb from a Cookie
//3. deleteCrumb() - for deleting of the required Crumb to delete the
// whole Cookie you must delete all of its Crumbs maybe there is a smarter
// way of doing that


/**
 *Creates a crumb with expire date & with value
 *@crumbName
 *@crumbValue
 *@expiredays
 */
function setPersistentCrumb(crumbName, crumbValue, expiredays){
    /*Tre variabler används för att skapa den nya smulan.
  Namnet på smulan, värdet som ska lagras och dagarna tills smulan går ut (bästföre datum).
  De första raderna i funktionen omvandlar antalet dagar till ett giltigt datum.*/
    var expireDate = new Date ();
    expireDate.setTime(expireDate.getTime() + (expiredays * 24 * 3600 * 1000));

    /*Nästa rad lagrar smulan, bara genom att tilldela värdena till document.cookie objektet.
      Notera att datumet är omvandlat till Greenwich Mean time i funktionen: "toGMTstring()"
      Notera escape-funktionen. Det är en funktion som gör om alla icke-alfanumeriska
      tecken såsom t.ex mellanslag eller & tecken till %20 för mellanslag och %26 för &.
      Detta görs för att Cookies ska kunna skickas via s.k URI en
      del av det som står i location.*/

    document.cookie = crumbName + "=" + escape(crumbValue) +
    ((expiredays == null) ? "" : "; expires=" + expireDate.toGMTString());
}

/**
 * This is a very good method which provides
 * the needed Crumb by sending its name as inParameter
 * @crumbName = the name of the Crumb for which the value is required
 */
function getCrumbValue(crumbName){
    /*Först ser man efter om det redan finns en kaka lagrad.
  Annars hade längden av textsträngen document.cookie varit noll.
  Alltså använder vi det som villkor nedan.*/
    if (document.cookie.length > 0){
        /* Sen vill vi kontrollera om smulans namn är lagrad
	   i "document.cookie" objektet för sidan. Om vår smulas namn
       inte är finns så kommer värdet -1 att lagras i variabeln
       "begin" och funktionen att returnera null.
       indexOf metoden är till för att hitta den första instansen
       eller den sista instansen av en s.k	substräng (t.ex ett namn på en smula)
       inom en en större sträng, d.v.s det namn vi letar efter.
       crumbName är ju argumentet som kommit in i funktionen.
	 */
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



/*
 * Deletes a specific crumb by setting its expiredate to one year ago.
 * @crumbName: the namne of the crumb to delete
 */
function deleteCrumb(crumbName){
    var expirationdate=new Date(); //sätter utgångsdatum till dagensdatum
    var oneyearback=expirationdate.getTime()-(365*24*60*60*1000); //sätter variabeln oneyearback till ett år tillbaka.
    expirationdate.setTime(oneyearback);  //sätter expirationdate till ett år tillbaka
    document.cookie = crumbName+"="+";expires= " + expirationdate.toGMTString();
}

/*
 * Displays all crumbs with name and value and a number in the given object.
 * The crumbs are attached as textnodes to the given object. 
 * @displayElementId: the id of element in which all the crumbs are displayed
 */
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

/**
 * Creates a crumb where the name = value
 * The crumb is valid only for one session because
 * the expiration time is not set
 * @crumb = both the name & value of the crumb
 */
function createSessionCrumb(crumb){
    document.cookie=crumb; //lägg märke till utelämningen av expires ger en s.k sessions-cookie.
}



/**
 *Creates a crumb valid period = one session
 *The value of the crumb can be set
 *@crumbName
 *@crumbValue
 */
function createCrumb(crumbName,crumbValue){
    document.cookie=crumbName+"="+crumbValue+";";
}

/**
 *This function is almost the same as
 *setPersistentCrumb(crumbName, crumbValue, expiredays)
 *@c_name = cookie name
 *@value = cookie value
 *@exdays = expire after x days
 */
function setCookie(c_name,value,exdays)
{
    var exdate=new Date();
    exdate.setDate(exdate.getDate() + exdays);
    var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
    document.cookie=c_name + "=" + c_value;
}

/**
 * Dont really understand this one!!!
 * Its better to use the getCrumbValue() function
 * if the cookie contains more then one crumble
 * this function return the whole cookie and only
 * the value of the first crumble
 * @deprecated
 */
function getCookie(c_name)
{
    var i,x,y,ARRcookies=document.cookie.split(";");
    for (i=0;i<ARRcookies.length;i++)
    {
        x=ARRcookies[i].substr(0,ARRcookies[i].indexOf("="));
        y=ARRcookies[i].substr(ARRcookies[i].indexOf("=")+1);
        x=x.replace(/^\s+|\s+$/g,"");
        if (x==c_name)
        {
            return unescape(y);
        }else{
            return "";
        }
    }
}



/*
 * Reads the entire cookie.
 * return: the cookie for the current page
 */
function getCookie(){
    return document.cookie; //returnerar hela kakan med alla smulorna separerade med semikolon.
}





	
