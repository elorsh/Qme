 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
   
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

     <link rel="stylesheet" href="<?php echo base_url('assets/css/B_myCustomersStyle.css');?>"/>

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

     <title>My Customers - Business</title>
 </head>
 <body>
    <header> 
        <img id="logo" src= "<?php echo base_url('assets/css/img/logo.png');?>"/>
     </header>
   
            <!----- The navigation menu ----->

            <nav class="navbar navbar-expand-sm">

                <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarMenu">
                    <ul class="navbar-nav">

                        <li class="nav-item">
                            <a  id="homePage" class="nav-link active">דף הבית <i class="fas fa-home"></i></a>
                        </li>
                  
                        <li class="nav-item">
                            <a id="B_myAppointments" class="nav-link">התורים שלי <i class="fas fa-calendar-alt"></i></a>
                        </li>

                        <li class="nav-item">
                            <a  id="B_my_profile" class="nav-link">הפרופיל שלי <i class="fas fa-user-circle"></i></a>
                        </li>
                
                    </ul>
                </div>
            </nav>
            <?php
            echo ' <h4 class="headline">'.$object->b_business_name.'</h4>';
            ?>
    <div class="table-container">

     <table dir="rtl" class="table table-striped">
        <thead>
          <tr>
            <th scope="col" >שם מלא</th>
            <th scope="col">טלפון</th>
            <th scope="col">היסטוריית טיפולים</th>
          </tr>
        </thead>
        <tbody>
        <?php
          foreach ($result as $object){

            echo "<tr>";
            echo '<th scope="col">'.$object->u_full_name.'</th>';
            echo '<th scope="col">'.$object->u_phone.'</th>';
            echo '<i class="fas fa-coins"></i>';

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
         window.location.href="<?php echo site_url('Intro/go_to_home_page');?>"
     }
     document.getElementById("B_myAppointments").onclick=function(){
         window.location.href="<?php echo site_url('Intro/go_to_b_appointments');?>"
     }
     document.getElementById("B_my_profile").onclick=function(){
         window.location.href="<?php echo site_url('Intro/go_to_b_myProfile');?>"
     }
     
  </script>
 </html>