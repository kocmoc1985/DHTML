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
    /*Tre variabler anv�nds f�r att skapa den nya smulan.
  Namnet p� smulan, v�rdet som ska lagras och dagarna tills smulan g�r ut (b�stf�re datum).
  De f�rsta raderna i funktionen omvandlar antalet dagar till ett giltigt datum.*/
    var expireDate = new Date ();
    expireDate.setTime(expireDate.getTime() + (expiredays * 24 * 3600 * 1000));

    /*N�sta rad lagrar smulan, bara genom att tilldela v�rdena till document.cookie objektet.
      Notera att datumet �r omvandlat till Greenwich Mean time i funktionen: "toGMTstring()"
      Notera escape-funktionen. Det �r en funktion som g�r om alla icke-alfanumeriska
      tecken s�som t.ex mellanslag eller & tecken till %20 f�r mellanslag och %26 f�r &.
      Detta g�rs f�r att Cookies ska kunna skickas via s.k URI en
      del av det som st�r i location.*/

    document.cookie = crumbName + "=" + escape(crumbValue) +
    ((expiredays == null) ? "" : "; expires=" + expireDate.toGMTString());
}

/**
 * This is a very good method which provides
 * the needed Crumb by sending its name as inParameter
 * @crumbName = the name of the Crumb for which the value is required
 */
function getCrumbValue(crumbName){
    /*F�rst ser man efter om det redan finns en kaka lagrad.
  Annars hade l�ngden av textstr�ngen document.cookie varit noll.
  Allts� anv�nder vi det som villkor nedan.*/
    if (document.cookie.length > 0){
        /* Sen vill vi kontrollera om smulans namn �r lagrad
	   i "document.cookie" objektet f�r sidan. Om v�r smulas namn
       inte �r finns s� kommer v�rdet -1 att lagras i variabeln
       "begin" och funktionen att returnera null.
       indexOf metoden �r till f�r att hitta den f�rsta instansen
       eller den sista instansen av en s.k	substr�ng (t.ex ett namn p� en smula)
       inom en en st�rre str�ng, d.v.s det namn vi letar efter.
       crumbName �r ju argumentet som kommit in i funktionen.
	 */
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



/*
 * Deletes a specific crumb by setting its expiredate to one year ago.
 * @crumbName: the namne of the crumb to delete
 */
function deleteCrumb(crumbName){
    var expirationdate=new Date(); //s�tter utg�ngsdatum till dagensdatum
    var oneyearback=expirationdate.getTime()-(365*24*60*60*1000); //s�tter variabeln oneyearback till ett �r tillbaka.
    expirationdate.setTime(oneyearback);  //s�tter expirationdate till ett �r tillbaka
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

/**
 * Creates a crumb where the name = value
 * The crumb is valid only for one session because
 * the expiration time is not set
 * @crumb = both the name & value of the crumb
 */
function createSessionCrumb(crumb){
    document.cookie=crumb; //l�gg m�rke till utel�mningen av expires ger en s.k sessions-cookie.
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





	
