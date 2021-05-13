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

     <link rel="stylesheet" href="<?php echo base_url('assets/css/P_createAccountStyle.css');?>"/>

     <title>Private Register </title>
 </head>
 <body>
    <header> 
        <img id="logo" src= "<?php echo base_url('assets/css/img/logo.png');?>"/>
     </header>
     <h4>יצירת חשבון פרטי</h4>

     <h5   dir="rtl" >אז אנחנו Qme :) <br>
    ואתם?</h5> 

    <div dir="rtl" class="createAccount">
      
   
    <form  dir="rtl"  class="row g-3 needs-validation"  onsubmit="matchPassword()"  novalidate method="post" action="<?php echo site_url('P_Users/p_auth_new_user');?>">
    
      <?php 
          if (isset($error)) {
            echo '<br> <p style="color:red">'.$error.'</p>';
          }
          ?>

        <div class="col-md-4" >
          <label for="validationCustom01" class="form-label" >שם מלא:</label>
          <input type="text" class="form-control" name="u_full_name"  id="validationCustom01" placeholder="שם פרטי ומשפחה" required>
          <div class="valid-feedback">
            שם מלא תקין
          </div>
        </div>
        <div class="col-md-4">
          <label for="validationCustom02" class="form-label">טלפון:</label>
          <input type="tel" class="form-control"  name="u_phone" id="validationCustom02" placeholder="000-0000000" required>
          <div class="valid-feedback">
           מספר טלפון תקין 
          </div>
        </div>
        <div class="col-md-4">
            <label for="validationCustom03" class="form-label">עיר מגורים:</label>
            <input type="text" class="form-control"  name="u_address" id="validationCustom03" placeholder="עיר מגורים" required>
            <div class="valid-feedback">
              עיר מגורים תקינה
            </div>
          </div>
        
        <div class="col-md-6">
          <label for="validationCustom04" class="form-label" >אימייל:</label>
          <input type="email" class="form-control"  name="u_email"  id="validationCustom04" placeholder="example@gmail.com" required>
          <div class="invalid-feedback">
            אנא הזן כתובת איימיל תקינה
          </div>
        </div>
        
        <div class="col-md-3">
            <label for="validationCustom05" class="form-label">סיסמה:</label>
            <input type="password" class="form-control" name="u_password" id="validationCustom05"  placeholder="********" minlength="6" required>
            <div class="invalid-feedback">
              יש להזין סיסמה בת 8 ספרות לפחות
            </div>
          </div>

        <div class="col-md-3">
          <label for="validationCustom06" class="form-label">אימות סיסמה:</label>
          <input type="password" class="form-control" name="confirm_u_password"  id="validationCustom06" minlength="6" placeholder="********" required>
          <div class="invalid-feedback">
            יש להזין סיסמה בת 6 ספרות לפחות
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
          <button class="btn btn" id="submit" type="submit" onclick="matchPassword()"> צור חשבון</button>
        </div>
      </form>



      <!-- <?php echo form_close(); ?> -->

          
    </div>

    <button class="btn btn change"  id="submit" type="submit" onclick="document.location='createBussinessAccount.html'">  מעבר לחשבון עסקי</button>


    <script src="../assets/javascript/createPrivateAccount.js"></script>

 </body>
 </html>