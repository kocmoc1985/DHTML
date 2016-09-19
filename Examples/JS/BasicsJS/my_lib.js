/* Library functions to support correct usage of the DOM according to W3C */

/* 
 * This funktion appends the given text message 
 * as a new TextNode into the element with the name
 * given as the parameter insertInto.
 * A new break-element is also inserted after the 
 * new TextNode.
 */
function newLine(insertInto, message){
  var insertInElement = document.getElementById(insertInto);
  newText = document.createTextNode(message);
  insertInElement.appendChild(newText);
  newBreak = document.createElement("br");
  insertInElement.appendChild(newBreak);
}

/*
 *This Method should be used in the script which calls this method
 *So this method cannot be used from my_lib !!!!!!!
 *
 *The method is called from addEvent which is usually 
 *placed in end of the script (the launching method)
 */
 function addListeners() {
  //document.getElementById("add") "add" id of the element to which
  //the listener is to be attached
  var addButton = document.getElementById("add");
  //the method which is called uppon the button clicking shoul be called without
  // this ones (), so like that- method not method()
  addEvent(addButton, "click", howTo_ArrayDeclaration);
}

/*
 * Generic function to attach an eventlistner to an element.
 * This one is needed to launch the script.
 * Is placed in the end of the document
 * @Param eventElement = window is the frequent use
 * @Param eventType = ?
 * @Param eventFunction = the function to be executed
 */
function addEvent(eventElement, eventType, eventFunction) {
  if( eventElement.addEventListener ) {
    //Detta är mozilla!
    eventElement.addEventListener( eventType, eventFunction, false );
    return true;
  }
  else if( eventElement.attachEvent ) {
    //Detta är IE!
    var returnval = eventElement.attachEvent( "on" + eventType, eventFunction );
    return returnval;
  }
}

/**
 * 1.Prompts to type a value.
 * 2.Tries to parse the String value into numeric
 * 
 * @Param textToDisplay the value to be shown in the prompt dialog
 * @Return The numeric value
 */
function getNumericValueByDialog(textToDisplay){
    var x = prompt(""+ textToDisplay,"");
    var tal = parseFloat(x);
    return tal;
}

/**
 * 
 */
function howTo_ArrayDeclaration(){
    document.writeln(" <h1 style=\"background-color: blue\">***********************************</h1>");
    document.writeln("<h1>Var x = new Array(10);</h1>")
    document.writeln("<h2>x[0] = \"ggg\";</h2>");
    document.writeln("<h2>x[1] = 5;</h2>");
    document.writeln("<h3>So the array may contain both Numerical and String values!!!!</h3>");
    document.writeln(" <h1 style=\"background-color: blue\">***********************************</h1>");
}
