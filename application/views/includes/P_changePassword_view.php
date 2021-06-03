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

     <title>Private Change Password</title>
 </head>
 <body>

     <i class="fas fa-user-circle" id="myProfile"></i>

      <p class="profile" id="myProfile2">
         הפרופיל שלי <br>
      <?php 
     if (isset($p_user['loggedin']))
     {
      echo $p_user['u_email'];
     };
      ?>
    </p>
    
    <header> 
    <img id="logo" src= "<?php echo base_url('assets/css/img/logo.png');?>"/>
     </header>
     
     <i class="fas fa-sign-out-alt" id="logOut"></i>
      <p class="log-out">התנתקות</p>

    <nav class="navbar navbar-expand-sm">

      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
        <i class="fa fa-bars" aria-hidden="true"></i>
      </button>
    <div class="collapse navbar-collapse" id="navbarMenu">
         <ul class="navbar-nav">
      
        <li class="nav-item">
            <a id="P_myAppointments" class="nav-link">התורים שלי <i class="fas fa-calendar-alt"></i></a>
        </li>

        <li class="nav-item">
            <a  id="P_my_profile"  class="nav-link">הפרופיל שלי <i class="fas fa-user-alt"></i></a>
        </li>

        <li class="nav-item">
            <a id="homePage" class="nav-link">דף הבית <i class="fas fa-home"></i></a>
        </li>

     </ul>
    </div>
</nav>

     <h4>שינוי סיסמה</h4>
     <p  dir="rtl">שמור על החשבון שלך בעזרת סיסמה חזקה :)</p>


    <form  dir="rtl"  class="row g-3 needs-validation"  novalidate  onsubmit="return  validationForm()" method="post"  action="<?php echo site_url('P_Users/P_update_password');?>" >

        <div class="form-group" >
          <label  for="validationCustom01" class="form-label" >סיסמה:</label>
          <input type="text" class="form-control" name="u_password" id="validationCustom01" value= "<?php foreach ($result as $res){if ($res->u_password!=null){echo $res->u_password;}} ?>" placeholder=" סיסמה בת 8 ספרות" required>
        </div>


        <button class="btn"  id="submit" type="submit" >עדכן את הסיסמה שלי</button>

          
          
          <div id="done"></div>
          
</form>

<!--<script src="../javascript/changePassword.js"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
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
  
    document.getElementById("logOut").onclick=function(){
        window.location.href="<?php echo site_url('P_Users/p_logout');?>"
     }
      document.getElementById("homePage").onclick=function(){
         window.location.href="<?php echo site_url('P_Users/go_to_home_page');?>"
     }

     document.getElementById("P_my_profile").onclick=function(){
         window.location.href="<?php echo site_url('P_users/go_to_P_myProfile');?>"
     }
     document.getElementById("myAppointments").onclick=function(){
         window.location.href="<?php echo site_url('P_Users/go_to_P_appointments');?>"
     }
     document.getElementById("myProfile").onclick=function(){
         window.location.href="<?php echo site_url('P_Users/go_to_P_myProfile');?>"
     }
     document.getElementById("myProfile2").onclick=function(){
         window.location.href="<?php echo site_url('P_Users/go_to_P_myProfile');?>"
     }
 </script>
 </html>