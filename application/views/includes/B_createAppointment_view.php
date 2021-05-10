 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

     <link rel="stylesheet" href="<?php echo base_url('assets/css/B_editTimeAndDateStyle.css');?>"/>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

     <title>Create Appointment - Business</title>
 </head>
 <body>
    <header> 
        <img id="logo" src= "<?php echo base_url('assets/css/img/logo.png');?>"/>
     </header>

     <i class="fas fa-share" onclick="document.location='#'"></i>
     <p class="back">חזור</p>
      <!----- The navigation menu ----->

      <nav class="navbar navbar-expand-sm">

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a href="#" class="nav-link active">דף הבית <i class="fas fa-home"></i></a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">מועדפים <i class="fas fa-heart"></i></a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">התורים שלי <i class="fas fa-calendar-alt"></i></a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">הפרופיל שלי <i class="fas fa-user-circle"></i></a>
                </li>
        
            </ul>
        </div>
    </nav>

     <h4>יצירת תור חדש</h4>

    <form  dir="rtl" onsubmit="return validationForm()" >

        <div class="form-group ">
            <label for="date">תאריך : </label>
            <input type="date" class="form-control" name="date" id="date"  min="2021-04-01"required>
          </div>

          <div class="form-group">
            <label for="time1">שעת התחלה :</label>
            <input type="time" class="form-control" name="time" id="time" required>
          </div>
          <div class="form-group">
            <label for="time2">שעת סיום :</label>
            <input type="time" class="form-control" name="time" id="time" required>
          </div>

          <button type="submit" id="submit" class="btn btn" value="run">עדכן במערכת את התור </button>
          <div id="done"></div>

</form>

    <script src="../javascript/editTimeAndDate.js"></script>

     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
 </body>
 </html>s