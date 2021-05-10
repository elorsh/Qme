 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
     <!--JQUERY - used for validation -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     
     <!-- CSS & BootStrap Link -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

     <link rel="stylesheet" href="<?php echo base_url('assets/css/forgotPasswordStyle.css');?>"/>

     <title>Forgot Password</title>
 </head>
 <body>
    <header> 
    <img id="logo" src= "<?php echo base_url('assets/css/img/logo.png');?>"/>
     </header>

      
     <i class="fas fa-share" onclick="document.location='#'"></i>
     <p class="back">חזור</p>

     <h4   dir="rtl" >שכחת את סיסמה?</h4>
     <h5  dir="rtl" >לא נורא! נאפס אותך בקליק</h5>


    <form  dir="rtl"  onsubmit="return validationForm()">

        <div class="form-group">
            <label for="email">אימייל : </label>
            <input type="text" class="form-control" name="email" id="email" autocomplete="on" placeholder="example@gmail.com">
          </div>

          <button type="submit" id="submit" class="btn btn" value="run"  >אפס לי את סיסמה </button>

          <div id="error"></div>
          <div id="done"></div>
          
    </form>



<script src="../javascript/forgotPassword.js"></script>

 </body>
 </html>