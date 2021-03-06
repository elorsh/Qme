 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

     
     <link rel="stylesheet" href="<?php echo base_url('assets/css/B_myAppointmentsStyle.css');?>"/>


     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

     <title>My Appointments- Business side</title>
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

     <h4 class="headline">התורים שלי</h4>

<div class="table-container">

     <table dir="rtl" class="table table-striped">
        <thead>
          <tr>
            <th scope="col" > שם המטופל</th>
            <th scope="col" > תאריך</th>
            <th scope="col">שעה</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach($result as $object){
           
            echo "<tr>";
            echo '<th scope="col">'.$object->u_full_name.'</th>';
            echo '<th scope="col">'.$object->a_date.'</th>';
            echo '<th scope="col">'.$object->a_time.'</th>';
            echo "</tr>";
          }

          ?>
        </tbody>
      </table>

    </div>
    
    <button class="btn"  id="createAppointment" type="button" > <i class="far fa-calendar-alt"></i>הזנה למערכת תור חדש </button>


    <h4 class="headline">תורים פנויים</h4>

<div class="table-container">

     <table dir="rtl" class="table table-striped">
        <thead>
          <tr>
            <th scope="col" > סטטוס</th>
            <th scope="col" > תאריך</th>
            <th scope="col">שעה</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach($result_new as $object){
           
            echo "<tr >";
            echo '<th scope="col">תור פנוי</th>';
            echo '<th scope="col">'.$object->a_date.'</th>';
            echo '<th scope="col">'.$object->a_time.'</th>';
            echo "</tr>";
          }

          ?>
        </tbody>
      </table>
    </div>


    <h4 class="headline">ביטול תור</h4>
    <form class="form1" dir="rtl" method="post"  action="<?php echo site_url('P_Users/go_to_b_cancelAppointment');?>"  onsubmit="return validationForm()" >

    <div dir="rtl" class="form-group">
    <label for="date">אנא בחר את תאריך התור לביטול : </label>
    <select type="date" class="form-select" name="a_date" id="date" required>
    <option selected disabled value="">תאריך</option>
    
    <?php
    foreach($result_all as $object){
        echo '<option>'.$object->a_date.'</option>';
    }

    ?>

      </select>
    </div>
    
    <button class="btn date"  id="cancelAppointment" type="submit" >אישור תאריך  <i class="far fa-calendar-alt"></i></button>

  </form>

     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
 
  </body>
  <script>
          document.getElementById("B_myCustomers").onclick=function(){
         window.location.href="<?php echo site_url('P_Users/go_to_b_myCustomers');?>"
     }
     document.getElementById("B_my_profile").onclick=function(){
         window.location.href="<?php echo site_url('P_Users/go_to_b_myProfile');?>"
     }
     document.getElementById("createAppointment").onclick=function(){
         window.location.href="<?php echo site_url('P_Users/go_to_b_create_appointment');?>"
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