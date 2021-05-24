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

     <link rel="stylesheet" href="<?php echo base_url('assets/css/P_editAccountStyle.css');?>"/>


     <title>Edit Private Account </title>
 </head>
 <body>
    <header> 
        <img id="logo" src= "<?php echo base_url('assets/css/img/logo.png');?>"/>
     </header>

     <i class="fas fa-sign-out-alt" id="logOut"></i>
      <p class="log-out">התנתקות</p>

       <!----- The navigation menu ----->

      <nav class="navbar navbar-expand-sm">

          <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
              <i class="fa fa-bars" aria-hidden="true"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarMenu">
               <ul class="navbar-nav">

               <li class="nav-item">
                     <a id="homePage" class="nav-link active">דף הבית <i class="fas fa-home"></i></a>
                </li>
      
             <li class="nav-item">
                <a id="P_myAppointments" class="nav-link">התורים שלי <i class="fas fa-calendar-alt"></i></a>
             </li>

           <li class="nav-item">
                <a  id="P_my_profile"  class="nav-link">הפרופיל שלי <i class="fas fa-user-circle"></i></a>
           </li>

        </ul>

      </div>
    </nav>
     <h4>הפרטים שלי</h4>

     <h5   dir="rtl" >כאן ניתן לעדכן ולערוך
   את הפרטים שלך בכל עת</h5> 




    <div class="createAccount">
   
      <form  dir="rtl"  class="row g-3 needs-validation"  novalidate>
    <?php
          foreach($result as $object){
            echo
        '<div class="col-md-4" >
          <label for="validationCustom01" class="form-label" >שם מלא :</label>
          <input type="text" class="form-control" name="u_full_name" id="validationCustom01" value= "'.$object->u_full_name.'" placeholder="שם פרטי ומשפחה" >
          </div>

        <div class="col-md-2">
          <label for="validationCustom02" class="form-label">טלפון  :</label>
          <input type="tel" class="form-control" name="u_phone1" id="validationCustom02" value= "'.$object->u_phone.'" placeholder="0000000000" >
        </div>

        <div class="col-md-3">
            <label for="validationCustom02" class="form-label">כתובת :</label>
            <input type="text" class="form-control" name="u_address" id="validationCustom05" value= "'.$object->u_address.'" placeholder="עיר ,רחוב ,מספר בית" >
          </div>';
          }
      ?>

        <button class="btn btn update "  id="submit" type="submit" >  עדכן את הפרטים שלי</button>

      </form>
      <div class="col-12">
          <button class="btn btn" id="changePass" type="button" >שינוי סיסמה</button>
        </div>
     </div>




  </body>
  <script>
      document.getElementById("homePage").onclick=function(){
         window.location.href="<?php echo site_url('P_Users/go_to_home_page');?>"
       }
       document.getElementById("P_my_profile").onclick=function(){
         window.location.href="<?php echo site_url('P_users/go_to_P_myProfile');?>"
     }
        document.getElementById("logOut").onclick=function(){
        window.location.href="<?php echo site_url('P_Users/p_logout');?>"
     }
       document.getElementById("changePass").onclick=function(){
        window.location.href="<?php echo site_url('P_Users/go_to_p_change_password');?>"
     }
     document.getElementById("myAppointments").onclick=function(){
         window.location.href="<?php echo site_url('P_Users/go_to_P_appointments');?>"
     
  </script>
 </html>