//-----Form validation-----//
var message = document.getElementById("done");


function validationForm(){

    var changeMessage= " ";
    changeMessage += " התור עודכן בהצלחה! ";
    message.innerHTML = (changeMessage);
    return false;
   
}

