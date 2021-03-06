<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/homePageStyle.css');?>"/>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <title>Home page </title>
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
      
    
  


    <h4  dir="rtl" >מה בא לנו? </h4>

 <!---------Search------->
     <div class="search-container">
       <div class="input-group">
           <input dir="rtl" type="text" class="form-control" id="myInput" placeholder="חיפוש..." onkeyup="myFunction()">
           <div class="input-group-append">
             <button class="btn btn" type="button"><i class="fa fa-search"></i></button>
           </div>
         </div>
     </div>

     <div class="table-container">

        <table dir="rtl" id="myTable" class="table table-striped">
           <thead>
             <tr>
               <th scope="col" > בית העסק</th>
               <th scope="col">זימון תור</th>
               <th scope="col">הודעה לבית העסק</th>
               <th scope="col">ניווט לבית העסק</th>
               <th scope="col">חייג לבית העסק</th>

   
             </tr>
           </thead>
           <tbody>

           <form  dir="rtl" method="post"  action="<?php echo site_url('P_Users/go_to_P_create_appointment');?>">


          <?php
              foreach ($result as $object){
                echo "<tr>";

                echo '<form  dir="rtl" method="post"  action="'.site_url('P_Users/go_to_P_create_appointment').'">';


                echo '<td scope="col"><h5>'.$object->b_business_name.'</h5><h6>'.$object->b_profession.'</h6><h7>'.$object->b_description.'</h7><br><h7>כתובת: '.$object->b_address.'</h7></td>';
               
                echo ' <input type="hidden" class="form-control" name="b_email" id="email" value= "'.$object->b_email.'" >';

                echo '<td><button type="submit" class="newAppointment" id="newAppointment"><i class="far fa-calendar-alt"  ></i></button></td>';
                echo '<td><a href="https://api.whatsapp.com/send?phone=+972'.$object->b_phone1.'&text=היי, הגעתי דרך אתר Qme (: אשמח לעזרה" target="_blank">
                <i class="fab fa-whatsapp"></i></a></td>';
                echo '<td><a href="https://waze.com/ul?q='.$object->b_address.'"><i class="fab fa-waze"></i></a></td>';
                echo '<td><a href="tel:'.$object->b_phone1.'"><i class="fas fa-phone"></i></a></td>';
                echo '</form>';
                echo "</tr>";
                }
            ?>
            
            </form>

           </tbody>
         </table>
       
       </div>
    


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script>
        function myFunction() {
          var input, filter, table, tr, td, i, txtValue;
          input = document.getElementById("myInput");
          filter = input.value.toUpperCase();
          table = document.getElementById("myTable");
          tr = table.getElementsByTagName("tr");
          for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
              txtValue = td.textContent || td.innerText;
              if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
              } else {
                tr[i].style.display = "none";
              }
            }       
          }
        }
        </script>
 </body>
 <script>
     document.getElementById("myProfile").onclick=function(){
         window.location.href="<?php echo site_url('P_Users/go_to_P_myProfile');?>"
     }
     document.getElementById("myProfile2").onclick=function(){
         window.location.href="<?php echo site_url('P_Users/go_to_P_myProfile');?>"
     }

     document.getElementById("logOut").onclick=function(){
        window.location.href="<?php echo site_url('P_Users/p_logout');?>"
     }
   
 </script>
</html>