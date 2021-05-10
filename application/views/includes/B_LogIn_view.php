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

     <link rel="stylesheet" href="<?php echo base_url('assets/css/B_LogInStyle.css');?>"/>

     <title>Business Log-In</title>
 </head>
 <body>
    <header> 
        <img id="logo" src= "<?php echo base_url('assets/css/img/logo.png');?>"/>  
     </header>
     <i class="fas fa-share" onclick="document.location='../index.html'"></i>
     <p class="back">חזור</p>
     <h4>,התגעגענו <br>
    בוא נתחבר</h4>

    <form  dir="rtl" onsubmit="#" >

        <div class="form-group ">
            <label for="email">אימייל : </label>
            <input type="text" class="form-control" name="b_full_name" id="fName" autocomplete="on" placeholder="example@gmail.com">
          </div>

          <div class="form-group">
            <label for="password">סיסמא:</label>
            <input type="text" class="form-control" name="b_password" id="pass" autocomplete="on" placeholder="******** ">
          </div>

          <button type="submit" id="submit" class="btn btn" value="run">התחבר! </button>
</form>



<div id="clear"></div>

<h3  dir="rtl" >עדיין לא עובדים ביחד?</h3>

<button type="submit" id="createBtn" class="createBtn" value="run"  onclick="document.location='createBussinessAccount.html'">צור חשבון עסקי</button>

<div id="clear"></div>

<button class="changeBtn"  id="submit" type="submit" onclick="document.location='privateLogIn.html'" >  מעבר לחשבון פרטי</button>

     
 
 </body>
 </html>