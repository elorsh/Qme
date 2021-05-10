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

     <link rel="stylesheet" href="<?php echo base_url('assets/css/P_editAccountStyle.css');?>"/>


     <title>Edit Business Account </title>
 </head>
 <body>
    <header> 
        <img id="logo" src= "<?php echo base_url('assets/css/img/logo.png');?>"/>
     </header>

     <i class="fas fa-share" onclick="document.location='myProfilePrivate.html'"></i>
     <p class="back">חזור</p>

     <h4>הפרטים שלי</h4>

     <h5   dir="rtl" >כאן ניתן לעדכן ולערוך
   את הפרטים שלך בכל עת</h5> 




    <div class="createAccount">
   
      <form  dir="rtl"  class="row g-3 needs-validation"  novalidate>

        <div class="col-md-4" >
          <label for="validationCustom01" class="form-label" >שם מלא :</label>
          <input type="text" class="form-control" id="validationCustom01" placeholder="שם פרטי ומשפחה" >
        </div>

        <div class="col-md-2">
          <label for="validationCustom02" class="form-label">טלפון  :</label>
          <input type="tel" class="form-control" id="validationCustom02" placeholder="000-0000000" >
        </div>

        

        <div class="col-md-3">
            <label for="validationCustom02" class="form-label">כתובת :</label>
            <input type="text" class="form-control" id="validationCustom05" placeholder="עיר ,רחוב ,מספר בית" >
          </div>

        <div class="col-md-3">
          <label for="validationCustom03" class="form-label" >אימייל:</label>
          <input type="email" class="form-control"  id="validationCustom08" placeholder="example@gmail.com" >
    
        </div>
        


        <div class="col-12">
          <button class="btn btn" id="submit" type="submit" onclick="document.location='changePassword.html'" >שינוי סיסמא</button>
        </div>
      </form>
     </div>

     <button class="btn btn update "  id="submit" type="submit" onclick="document.location='#'" >  עדכן את פרטי העסק</button>



  </body>
 </html>