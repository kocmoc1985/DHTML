/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */



function go(){
    searchString("Andrei", "ei")
    if(searchString("Andrei", "x")){
        newLine("a", "YES!");
    }else{
        newLine("a", "NO!");
    }
}


addEvent(window, "load", go);

