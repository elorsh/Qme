//למחוק
 
  function validationForm(){
    var password = $("#pass2").val();
    var confirmPassword = $("#pass3").val();
    var message = document.getElementById("done");
    var changeMessage= " ";

  if (password != confirmPassword) {
    alert("הסיסמאות אינן זהות");
    return false

    } else{
        changeMessage= " הסיסמא שונתה בהצלחה";
        message.innerHTML=(changeMessage);
        return false;
    }
  }



