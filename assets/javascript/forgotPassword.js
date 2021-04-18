//-----Form validation-----//
var error = document.getElementById("error");
var message = document.getElementById("done");


function validationForm(){

    var errorMessage = "";
    var changeMessage= " ";

     //-----Email validation-----//
     if(isEmail($("#email").val()) == false) {

        errorMessage += " כתובת אימייל שגויה"
    }

    if (errorMessage != ""){
        error.innerHTML=(errorMessage);
        return false;
    }else{
        changeMessage += " הוראות עבור אימור הסיסמא נשלחו אלייך למייל";
        error.innerHTML=" ";
        message.innerHTML = (changeMessage);
        return false;
    }

   
}

function isEmail(email){

    var regex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return regex.test(email);

}
