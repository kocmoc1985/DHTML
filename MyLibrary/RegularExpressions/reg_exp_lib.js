/* 
 * Good to remember =
 * opening tag "/^"
 * closing tag "$/"
 */


//An expression for checking email
var email = /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+(?:[A-Z]{2}|com|org|net|edu|gov|mil|biz|info|mobi|name|aero|asia|jobs|museum)\b$/;


/**
 * An advanced/proper function to check email with
 * @formId = the id of the form element from witch the email is get from the email field
 */
function emailValidateEmailRegular(formId){
    var emailRegExp = /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+(?:[A-Z]{2}|com|org|net|edu|gov|mil|biz|info|mobi|name|aero|asia|jobs|museum)\b$/;
    var email = document.forms[formId]["email"].value;
    if(email.search(emailRegExp)==-1){// st?mmer inte
        return false;
    }else{
        return true;
    }
}