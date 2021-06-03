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

     <link rel="stylesheet" href="<?php echo base_url('assets/css/B_editAccountStyle.css');?>"/>


     <title>Edit Business Account </title>
 </head>
 <body>
   
  <i class="fas fa-user-circle" id="myProfile"></i>

      <p class="profile" id="myProfile2">
      הפרופיל העסקי שלי <br>
      <?php 
     if (isset($b_user['loggedin']))
     {
    echo $b_user['b_email'];
     };
      ?>
    </p>

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
                      <a  id="B_myCustomers" class="nav-link">הלקוחות שלי <i class="fas fa-users"></i></a>
                    </li>
                            
                    <li class="nav-item">
                        <a id="B_myAppointments"  class="nav-link">התורים שלי <i class="fas fa-calendar-alt"></i></a>
                    </li>

                    <li class="nav-item">
                        <a id="B_my_profile" class="nav-link">ניהול העסק שלי <i class="fas fa-user-alt"></i></a>
                    </li>
                    
                    </ul>
                </div>
            </nav>
     <h4>פרטי העסק שלי</h4>

     <h5   dir="rtl" >כאן תוכל לעדכן ולערוך
    הכל אודות העסק שלך</h5> 


    <div class="createAccount">
   
      <form  dir="rtl"  class="row g-3 needs-validation"  novalidate>

        <div class="col-md-4" >
          <label for="validationCustom01" class="form-label" >שם בעל העסק:</label>
          <input type="text" class="form-control" name="b_full_name" id="validationCustom01" value="#" placeholder="שם פרטי ומשפחה" >
        </div>

        <div class="col-md-4">
          <label for="validationCustom02" class="form-label">טלפון בעל העסק:</label>
          <input type="tel" class="form-control" name="b_phone1" id="validationCustom02" value="#" placeholder="0000000000" >
        </div>

        <div class="col-md-4" >
            <label for="validationCustom01" class="form-label" >שם בית העסק:</label>
            <input type="text" class="form-control" name="b_business_name" id="validationCustom03" value="#" placeholder="שם בית העסק" >
          </div>
          
        <div class="col-md-4" >
            <label for="validationCustom01" class="form-label" >תיאור בית העסק:</label>
            <input type="text" class="form-control" name="b_description" id="validationCustom12" value="#" placeholder="תיאור" >
          </div>

          <div class="col-md-4" >
            <label for="validationCustom01" class="form-label" >ח.פ / ת.ז  :</label>
            <input type="text" class="form-control" name="b_id" id="validationCustom04"  value="#" placeholder="ח.פ/ת.ז" >             
          </div>

        <div class="col-md-4">
            <label for="validationCustom02" class="form-label">כתובת :</label>
            <input type="text" class="form-control" name="b_address" id="validationCustom05" value="#" placeholder="עיר ,רחוב ,מספר בית" >
          </div>

          <div class="col-md-3">
            <label for="validationCustom02" class="form-label">טלפון נוסף :</label>
            <input type="tel" class="form-control" name="b_phone2" id="validationCustom06" value="#" placeholder="000-0000000" >
          </div>

          <div class="col-md-3">
            <label for="validationCustom04" class="form-label">תחום עיסוק:</label>
            <select class="form-select"  name="b_profession" value="#" id="validationCustom07" >
              <option selected disabled value="">תחום עיסוק</option>
              <option>עיצוב שיער</option>
              <option>לק ג'ל</option>
              <option> קוסמטיקה</option>
              <option>סטודיו </option>
            </select>       
          </div>

        <div class="col-12">
          <button class="btn btn" id="changePass" type="button" >שינוי סיסמה</button>
        </div>

        <button class="btn btn "  id="submit" type="submit">  עדכן את פרטי העסק</button>

      </form>
     </div>



     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
  </body>

  <script>
         document.getElementById("B_myCustomers").onclick=function(){
         window.location.href="<?php echo site_url('P_Users/go_to_b_myCustomers');?>"
     }
     document.getElementById("B_myAppointments").onclick=function(){
         window.location.href="<?php echo site_url('P_Users/go_to_b_appointments');?>"
     }
     document.getElementById("B_my_profile").onclick=function(){
         window.location.href="<?php echo site_url('P_Users/go_to_b_myProfile');?>"
     }
      document.getElementById("changePass").onclick=function(){
         window.location.href="<?php echo site_url('P_Users/ go_to_b_change_password');?>"
     }
     document.getElementById("logOut").onclick=function(){
        window.location.href="<?php echo site_url('P_Users/go_to_b_login');?>"
     }
        document.getElementById("myProfile").onclick=function(){
         window.location.href="<?php echo site_url('P_Users/go_to_b_myProfile');?>"
     }
     document.getElementById("myProfile2").onclick=function(){
         window.location.href="<?php echo site_url('P_Users/go_to_b_myProfile');?>"
     }
  </script>
 </html>