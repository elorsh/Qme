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

     
     <link rel="stylesheet" href="<?php echo base_url('assets/css/B_cancelAppointmentStyle.css');?>"/>

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

     <title>Business Cancel Appointment</title>
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

     <h4><i class="far fa-calendar-times"></i> ביטול תור </h4>

     <p2 dir="rtl">בחר שעה רצויה:</p2>
     
     <form  dir="rtl" method="post"  action="<?php echo site_url('P_Users/B_delete_appointment');?>" onsubmit="return validationForm()" >



     <div class="form-group ">             
              
                   <?php echo ' <input type="hidden" class="form-control" name="b_email" id="email" value= "'.$b_user['b_email'].'" >';
                        ?>

          </div>


    <div class="form-group ">
                   <?php echo '<label for="date">תאריך: '.$a_date.'</label>';?>

                   <?php echo ' <input type="hidden" class="form-control" name="a_date" id="date" value= "'.$a_date.'" >';
                        ?>

          </div>
          


    <div class="form-group ">
        <label for="time">שעה : </label>
        <select type="time" class="form-select" name="a_time" id="time" required>
            <option selected disabled value="">שעה</option>
            
            <?php
            foreach($result_time as $object){
                echo '<option>'.$object->a_time.'</option>';
            }

            ?>

            </select>
    </div>

    <button class="btn"  id="submit" type="submit" >בטל לי את התור</button>

    </form>



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
     document.getElementById("logOut").onclick=function(){
        window.location.href="<?php echo site_url('P_Users/go_to_b_login');?>"
     }
     document.getElementById("myProfile").onclick=function(){
         window.location.href="<?php echo site_url('P_Users/go_to_b_myProfile');?>"
     }
     document.getElementById("myProfile2").onclick=function(){
         window.location.href="<?php echo site_url('P_Users/go_to_b_myProfile');?>"
     }


     
// cancel message
//   var  btn = document.getElementById('submit');
  
//   btn.addEventListener( 'click', () => {
//     window.confirm("האם ברצונך לבטל את התור ?");
//   })

  </script>

 </html>