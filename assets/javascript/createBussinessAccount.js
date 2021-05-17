//למחוק את כל הקובץ

/*----- Password check -----*/
/*
function matchPassword(){
  var pass1 = document.getElementById("validationCustom09");
  var pass2 = document.getElementById("validationCustom10");

  if(pass1 != pass2){
    alert("סיסמאות אינן זהות")
  }

}*/


(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
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

