/*----- Password check -----*/
/*
function matchPassword(){
  var pass1 = document.getElementById("validationCustom05");
  var pass2 = document.getElementById("validationCustom06");

  if(pass1 != pass2){
    alert("סיסמאות אינן זהות")
  }

}*/

(function () {
    'use strict'
  
    var forms = document.querySelectorAll('.needs-validation')
  
    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }
  
          form.classList.add('was-validated')
        }, false)
      })
  })()
