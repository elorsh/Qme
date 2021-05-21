<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
   
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

     <link rel="stylesheet" href="<?php echo base_url('assets/css/B_myAppointmentsStyle.css');?>"/>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

     <title>My Appointments- Private </title>
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
                            <a  id="P_myAppointments" class="nav-link">התורים שלי <i class="fas fa-calendar-alt"></i></a>
                        </li>

                        <li class="nav-item">
                            <a id="P_my_profile" class="nav-link">הפרופיל שלי <i class="fas fa-user-circle"></i></a>
                        </li>
                
                    </ul>
                </div>
            </nav>

     <h4 class="headline">התורים שלי</h4>

<div class="table-container">

     <table dir="rtl" class="table table-striped">
        <thead>
          <tr>
            <th scope="col" > בית עסק</th>
            <th scope="col" > תאריך</th>
            <th scope="col">שעה</th>
            <th scope="col">עדכון תור</th>

          </tr>
        </thead>
        <tbody>
        <?php
          foreach($result as $object){
           
            echo "<tr>";
            echo '<th scope="col">'.$object->b_business_name.'</th>';
            echo '<th scope="col">'.$object->a_date.'</th>';
            echo '<th scope="col">'.$object->a_time.'</th>';
            echo '<i class="far fa-calendar-alt"></i>';
            echo "</tr>";
          }

          ?>
        </tbody>
      </table>

    
    </div>

    <button class="btn"  id="submit"  id="newAppointment" type="submit" > <i class="far fa-calendar-alt"></i>הזנה למערכת תור חדש </button>



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
     document.getElementById("newAppointment").onclick=function(){
         window.location.href="<?php echo site_url('Intro/go_to_P_createAppointment');?>"
     }
     document.getElementById("logOut").onclick=function(){
        window.location.href="<?php echo site_url('P_Users/logout');?>"
     }
     
  </script>
 </html>