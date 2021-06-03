 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
   
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

     <link rel="stylesheet" href="<?php echo base_url('assets/css/P_businessHistoryStyle.css');?>"/>

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

     <title>Private Business History</title>
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

      
            <!----- The navigation menu ----->

            <nav class="navbar navbar-expand-sm">

                <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarMenu">
                    <ul class="navbar-nav">

                        <li class="nav-item">
                            <a  id="homePage" class="nav-link">דף הבית <i class="fas fa-home"></i></a>
                        </li>
                 
                        <li class="nav-item">
                            <a  id="P_myAppointments" class="nav-link">התורים שלי <i class="fas fa-calendar-alt"></i></a>
                        </li>

                        <li class="nav-item">
                            <a id="P_my_profile" class="nav-link">הפרופיל שלי <i class="fas fa-user-alt"></i></a>
                        </li>
                
                    </ul>
                </div>
            </nav>

     <h4 class="headline"> בתי עסק בהם ביקרתי</h4>

<div class="table-container">

     <table dir="rtl" class="table table-striped">
        <thead>
          <tr>
            <th scope="col" > שם בית עסק</th>
            <th scope="col">כתובת </th>
            <th scope="col">חיוג לבית העסק</th>
            <th scope="col">הודעה לבית העסק</th>

          </tr>
        </thead>
        <tbody>
        <?php

          foreach($result as $object){
           
            echo "<tr>";
            echo '<td scope="col">'.$object->b_business_name.'</td>';
            echo '<td scope="col">'.$object->b_address.'</td>';
            echo '<td><a href="tel:'.$object->b_phone1.'"><i class="fas fa-phone"></i></a></td>';
           echo '<td><a href="https://api.whatsapp.com/send?phone=+972'.$object->b_phone1.'&text=היי, כיצד נוכל לעזור?" target="_blank">
           <i class="fab fa-whatsapp"></i></a></td>';
           echo "</tr>";

          }

          ?>

        </tbody>
      </table>
    
    </div>


     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
 
  </body>
  <script>
      document.getElementById("homePage").onclick=function(){
         window.location.href="<?php echo site_url('P_Users/go_to_home_page');?>"
     }
     document.getElementById("P_myAppointments").onclick=function(){
         window.location.href="<?php echo site_url('P_Users/go_to_P_appointments');?>"
     }
     document.getElementById("P_my_profile").onclick=function(){
         window.location.href="<?php echo site_url('P_Users/go_to_P_myProfile');?>"
     }
     document.getElementById("logOut").onclick=function(){
        window.location.href="<?php echo site_url('P_Users/p_logout');?>"
     }
     document.getElementById("myProfile").onclick=function(){
         window.location.href="<?php echo site_url('P_Users/go_to_P_myProfile');?>"
     }
     document.getElementById("myProfile2").onclick=function(){
         window.location.href="<?php echo site_url('P_Users/go_to_P_myProfile');?>"
     }
  </script>
 </html>