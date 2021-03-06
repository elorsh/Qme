 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

     <link rel="stylesheet" href="<?php echo base_url('assets/css/B_createAccountStyle.css');?>"/>


     <title>Business Register </title>
 </head>
 <body>
    <header> 
        <img id="logo" src= "<?php echo base_url('assets/css/img/logo.png');?>"/>
     </header>
 

     <h4>יצירת חשבון עסקי</h4>

     <h5   dir="rtl" >אנחנו שמחים שבחרתם להצטרף למשפחת Qme!</h5> 
     <p  dir="rtl">אנא מלאו את הפרטים הבאים</p>




    <div class="createAccount">

    <?php 
          if (isset($error)) {
            echo '<center><br> <p4 dir="rtl" class="wrongEmail">'.$error.'</p4></center>';
          }
      ?>  
   
      <form  dir="rtl"  class="row g-3 needs-validation" method="post"  action="<?php echo site_url('P_Users/b_auth_new_user');?>" novalidate>

        <div class="col-md-4" >
          <label for="validationCustom01" class="form-label" >שם בעל העסק:</label>
          <input type="text" class="form-control"  name="b_full_name" id="validationCustom01" placeholder="שם פרטי ומשפחה" required>
          <div class="valid-feedback">
            שם תקין
          </div>
        </div>

        <div class="col-md-4">
          <label for="validationCustom02" class="form-label">טלפון בעל העסק:</label>
          <input type="tel" class="form-control" name="b_phone1" id="validationCustom02"  minlength="10" placeholder="0000000000" required>
          <div class="valid-feedback">
           מספר טלפון תקין 
          </div>
        </div>

        <div class="col-md-4" >
            <label for="validationCustom03" class="form-label" >שם בית העסק:</label>
            <input type="text" class="form-control"  name="b_business_name" id="validationCustom03" placeholder="שם בית העסק" required>
            <div class="valid-feedback">
              שם בית העסק תקין
            </div>
          </div>

          <div class="col-md-4" >
            <label for="validationCustom03" class="form-label" >תיאור בית העסק:</label>
            <input type="text" class="form-control"  name="b_description" id="validationCustom12" placeholder="תיאור בית העסק" required>
            <div class="valid-feedback">
              שם בית העסק תקין
            </div>
          </div>
          
          <div class="col-md-4" >
            <label for="validationCustom04" class="form-label" >ח.פ / ת.ז  :</label>
            <input type="text" class="form-control"  name="b_id" id="validationCustom04" placeholder="000000000" required>
            <div class="valid-feedback">
              מספר תקין
            </div>
          </div>

        <div class="col-md-4">
            <label for="validationCustom05" class="form-label">כתובת :</label>
            <input type="text" class="form-control"  name="b_address" id="validationCustom05" placeholder="עיר ,רחוב ומספר בית" required>
            <div class="valid-feedback">
              כתובת תקינה
            </div>
          </div>

          <div class="col-md-3">
            <label for="validationCustom06" class="form-label">טלפון נוסף :</label>
            <input type="tel" class="form-control" name="b_phone2" id="validationCustom06" placeholder="0000000000" >
            <div class="valid-feedback">
             מספר טלפון תקין 
            </div>
          </div>

          <div class="col-md-3">
            <label for="validationCustom07" class="form-label">תחום עיסוק:</label>
            <select class="form-select" name="b_profession" id="validationCustom07" required>
              <option selected disabled value="">תחום עיסוק</option>
              <option>עיצוב שיער</option>
              <option>לק ג'ל</option>
              <option>קוסמטיקה</option>
              <option>סטודיו </option>
              <option>אחר </option>

            </select>
            <div class="invalid-feedback">
             אנא בחר תחום עיסוק 
            </div>
          </div>

        <div class="col-md-3">
          <label for="validationCustom08" class="form-label" >אימייל:</label>
          <input type="email" class="form-control"  name="b_email" id="validationCustom08" placeholder="example@gmail.com" required>
          <div class="invalid-feedback">
            אנא הזן כתובת איימיל תקינה
          </div>
        </div>
        
        <div class="col-md-3">
            <label for="validationCustom09" class="form-label">סיסמה:</label>
            <input type="text" class="form-control" name="b_password" id="validationCustom09" minlength="8" placeholder="סיסמה בת 8 ספרות" minlength="8" required>
            <div class="invalid-feedback">
              יש להזין סיסמה בת 8 ספרות לפחות
            </div>
          </div>

        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
            <label class="form-check-label" for="invalidCheck">
             אני מאשר את תנאי התקנון
            </label>
            <div class="invalid-feedback">
              יש לאשר את תנאי התקנון
            </div>
          </div>
        </div>

        <div class="col-12">
          <button class="btn btn" id="submit" type="submit" > צור חשבון</button>
        </div>

      </form>
     </div>

     <button class="btn btn change"  id="toPrivate" type="button" >  מעבר לחשבון פרטי</button>



  </body>
  <script>
    
  //validation bootstrap function    
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

     document.getElementById("toPrivate").onclick=function(){
         window.location.href="<?php echo site_url('P_Users/go_to_p_register');?>"
     }
  </script>
   </html>