<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
     <!--JQUERY - used for validation -->
     <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
      <!-- CSS & BootStrap Link -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

     <link rel="stylesheet" href="<?php echo base_url('assets/css/changePasswordStyle.css');?>"/>

     <title>Business Change Password</title>
 </head>
 <body>
    <header> 
        <img id="logo" src= "<?php echo base_url('assets/css/img/logo.png');?>"/>
     </header>
     
     <i class="fas fa-sign-out-alt" id="logOut"></i>
      <p class="log-out">התנתקות</p>

     <h4>שינוי סיסמה</h4>
     <p  dir="rtl">שמור על הסיסמא שלך בעזרת סיסמה חזקה :)</p>

    <form  dir="rtl"  onsubmit="return validationForm()">

        <div class="form-group">
            <label for="pass1">סיסמא נוכחית : </label>
            <input type="password" class="form-control" name="password1" id="pass1" minlength="8" autocomplete="on" placeholder="סיסמא נוכחית">
          </div>

          <div class="form-group">
            <label for="pass2">סיסמה חדשה:</label>
            <input type="password" class="form-control" name="password2" id="pass2"  minlength="8" autocomplete="on" placeholder="סיסמא חדשה">
          </div>

         <!-- <div class="form-group">
            <label for="pass3">אימות סיסמה :</label>
            <input type="password" class="form-control" name="password3" id="pass3" minlength="8" autocomplete="on" placeholder="אימות סיסמא חדשה">
          </div>-->

          <button type="submit" id="submit" class="btn btn" value="run" >שינוי סיסמה </button>
          
          <div id="done"></div>
          

</form>
<script src="../javascript/changePassword.js"></script>

 </body>
 <script>
   document.getElementById("logOut").onclick=function(){
      window.location.href="<?php echo site_url('Intro/go_to_b_login');?>"
     }
 </script>
 </html>