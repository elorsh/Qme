 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

     <link rel="stylesheet" href="<?php echo base_url('assets/css/P_LogInStyle.css');?>"/>

     <title>Private Log-in</title>
 </head>
 <body>
    <header> 
        <img id="logo" src= "<?php echo base_url('assets/css/img/logo.png');?>"/>
     </header>

     <?php 
          if (isset($msg)) {
            echo '<br> <center><h5 class="message">'.$msg.'</h5></center><br>';
          }
          ?>
     
     <h4>,התגעגענו <br>
    בוא נתחבר</h4>

    <form method="post" action="<?php echo site_url('P_Users/p_auth')?>"dir="rtl">

        <div class="form-group ">
            <label for="email">אימייל : </label>
            
          <?php 
          if (isset($error)) {
            echo '<br> <h6 class="message">'.$error.'</h6>';
          }
          ?>

            <input type="text" class="form-control" name="u_email" id="email" autocomplete="on" placeholder="example@gmail.com" >
          </div>

          <div class="form-group">
            <label for="password">סיסמה:</label>
            <input type="password" class="form-control" name="u_password" id="pass" autocomplete="on" placeholder="******** " >
          </div>

          <button type="submit" id="submit" class="btn btn" value="run">התחבר! </button>
</form>


<div id="clear"></div>

<h3  dir="rtl" >עדיין לא מכירים?</h3>

<button type="button" id="p_register" class="createBtn" value="run"  >צור חשבון</button>
  
<div id="clear"></div>

<button class="changeBtn"  id="b_login" type="button"  >  מעבר לחשבון עסקי</button>
 
 </body>

 <script>
     document.getElementById("p_register").onclick=function(){
         window.location.href="<?php echo site_url('Intro/go_to_p_register');?>"
     }
     document.getElementById("b_login").onclick=function(){
         window.location.href="<?php echo site_url('Intro/go_to_b_login');?>"
     }
 </script>
 </html>