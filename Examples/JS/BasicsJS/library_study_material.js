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
 * Generic function to attach an eventlistner to an element.
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

