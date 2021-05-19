 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

     <link rel="stylesheet" href="<?php echo base_url('assets/css/P_editTimeAndDateStyle.css');?>"/>

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

     <title>Create Appointment</title>
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
                <a id="P_my_profile" class="nav-link">הפרופיל שלי <i class="fas fa-user-circle"></i></a>
            </li>
    
        </ul>
    </div>
</nav>

     <h4>בחירת תור חדש</h4>

    <form  dir="rtl" onsubmit="return validationForm()" >

        <div class="form-group ">
            <label for="date">תאריך : </label>
            <select type="date" class="form-select" name="date" id="date" required>
                 <option selected disabled value="">תאריך</option>
                  <option>01/06/21</option>
                  <option>02/06/21</option>
                  <option>03/06/21</option>
                  <option>04/06/21</option>
                </select>
          </div>

          <div class="form-group">
            <label for="time">שעה :</label>
            <select type="time" class="form-control" name="time" id="time" required>
            <option>08:00</option>
            <option>09:00</option>
            <option>10:00</option>
            <option>11:00</option>
            <option>12:00</option>
            <option>13:00</option>
            <option>14:00</option>
            <option>15:00</option>
            <option>16:00</option>
            <option>17:00</option>
            </select>
          </div>
        

          <div class="form-group message">
            <div class="sms">
            <input type="checkbox" id="sms" name="sms" value="no">
            <label class="sms" for="sms">אני מעוניין לקבל הודעת תזכורת</label>
          </div>
          </div>

          <div class="form-group">
            <div class="googleCalendare">
            <input type="checkbox" id="googleCalendare" name="googleCalendare" value="no">
            <label class="googleCalendare" for="googleCalendare">יש לי יומן גוגל</label>
          </div>
          </div>


          <button type="submit" id="submit" class="btn btn" value="run">עדכן לי את התור </button>
          <div id="done"></div>

</form>

<script src="../javascript/editTimeAndDate.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

 </body>
 <script>
      document.getElementById("homePage").onclick=function(){
         window.location.href="<?php echo site_url('Intro/go_to_home_page');?>"
     }
     document.getElementById("P_myAppointments").onclick=function(){
         window.location.href="<?php echo site_url('Intro/go_to_P_appointments');?>"
     }
     document.getElementById("P_my_profile").onclick=function(){
         window.location.href="<?php echo site_url('Intro/go_to_P_myProfile');?>"
     }
     document.getElementById("logOut").onclick=function(){
        window.location.href="<?php echo site_url('Intro/go_to_p_login);?>"
     }
  
     
  </script>
 </html>