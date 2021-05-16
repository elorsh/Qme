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
   <header> 
       <img id="logo" src= "<?php echo base_url('assets/css/img/logo.png');?>"/>
    </header>
    
    <i class="fas fa-user-circle" onclick="document.location='myProfilePrivate.html'"></i>
    <p class="profile">הפרופיל שלי</p>
     

    <h4  dir="rtl" >מה בא לנו? </h4>

 <!---------Search------->
     <div class="search-container">
       <div class="input-group">
           <input type="text" class="form-control" id="myInput" placeholder="Search..." onkeyup="myFunction()">
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
               <th scope="col">תיאור</th>
               <th scope="col">כתובת</th>
               <th scope="col">זימון תור</th>
               <th scope="col">ניווט לבית העסק</th>
               <th scope="col">התקשר לבית העסק</th>

   
             </tr>
           </thead>
           <tbody>
              <?php
              foreach ($result as $object){

                echo "<tr>";
                echo '<th scope="col">'.$object->b_business_name.'</th>';
                echo '<th scope="col">'.$object->b_description.'</th>';
                echo '<th scope="col">'.$object->b_address.'</th>';
                echo '<td><i class="far fa-calendar-alt"></i></td>';
                echo '<td><i class="fab fa-waze"></i></td>';
                echo '<td><i class="fas fa-phone"></i></td>';
                echo "</tr>";
                }
            ?>



             <!-- <tr>
               <td >יוגה עם שיגול</td>
               <td>סטודיו לאימוני יוגה אישיים ובקבוצות קטנות</td>
               <td>הפלמ"ח 8 רמת השרון</td>
               <td><i class="far fa-calendar-alt"></i></td>
               <td><i class="fab fa-waze"></i></td>
               <td><i class="fas fa-phone"></i></td>

   
             </tr>
             <tr>
                <td > ג'וני עיצוב שיער</td>
                <td>מכון בוטיק לעיצוב שיער</td>
                <td>בן יהודה 70 תל אביב</td>
                <td><i class="far fa-calendar-alt"></i></td>
                <td><i class="fab fa-waze"></i></td>
                <td><i class="fas fa-phone"></i></td>
 
             </tr>
             <tr>
                <td >גל טורן -בוטיק ציפורניים</td>
                <td>סטודיו לק ג'ל פדיקור ומניקור</td>
                <td>הרצל 66 ראשון לציון</td>
                <td><i class="far fa-calendar-alt"></i></td>
                <td><i class="fab fa-waze"></i></td>
                <td><i class="fas fa-phone"></i></td>
 
             </tr>
             <tr>
                <td >שני כוכבי מכון יופי</td>
                <td>מכון שיזוף וטיפוח</td>
                <td>ז'בוטינסקי 15 רמת גן</td>
                <td><i class="far fa-calendar-alt"></i></td>
                <td><i class="fab fa-waze"></i></td>
                <td><i class="fas fa-phone"></i></td>
 
             </tr> -->
           
           </tbody>
         </table>
       
       </div>
    

    <script src="../javascript/cancelAppointment.js"></script>

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
            for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[1];
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
</html>