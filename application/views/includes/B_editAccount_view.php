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

     <link rel="stylesheet" href="<?php echo base_url('assets/css/B_editAccountStyle.css');?>"/>


     <title>Edit Business Account </title>
 </head>
 <body>
    <header> 
         <img id="logo" src= "<?php echo base_url('assets/css/img/logo.png');?>"/>
     </header>

     <h4>פרטי העסק שלי</h4>

     <h5   dir="rtl" >כאן תוכל לעדכן ולערוך
    הכל אודות העסק שלך</h5> 


    <div class="createAccount">
   
      <form  dir="rtl"  class="row g-3 needs-validation"  novalidate>

        <div class="col-md-4" >
          <label for="validationCustom01" class="form-label" >שם בעל העסק:</label>
          <input type="text" class="form-control" name="b_full_name" id="validationCustom01" placeholder="שם פרטי ומשפחה" >
        </div>

        <div class="col-md-4">
          <label for="validationCustom02" class="form-label">טלפון בעל העסק:</label>
          <input type="tel" class="form-control" name="b_phone1" id="validationCustom02" placeholder="0000000000" >
        </div>

        <div class="col-md-4" >
            <label for="validationCustom01" class="form-label" >שם בית העסק:</label>
            <input type="text" class="form-control" name="b_business_name" id="validationCustom03" placeholder="שם בית העסק" >
          </div>
          
        <div class="col-md-4" >
            <label for="validationCustom01" class="form-label" >תיאור בית העסק:</label>
            <input type="text" class="form-control" name="b_description" id="validationCustom12" placeholder="תיאור" >
          </div>

          <div class="col-md-4" >
            <label for="validationCustom01" class="form-label" >ח.פ / ת.ז  :</label>
            <input type="text" class="form-control" name="b_id" id="validationCustom04" placeholder="ח.פ/ת.ז" >             
          </div>

        <div class="col-md-4">
            <label for="validationCustom02" class="form-label">כתובת :</label>
            <input type="text" class="form-control" name="b_address" id="validationCustom05" placeholder="עיר ,רחוב ,מספר בית" >
          </div>

          <div class="col-md-4">
            <label for="validationCustom02" class="form-label">טלפון נוסף :</label>
            <input type="tel" class="form-control" name="b_phone2" id="validationCustom06" placeholder="000-0000000" >
          </div>

          <div class="col-md-4">
            <label for="validationCustom04" class="form-label">תחום עיסוק:</label>
            <select class="form-select"  name="b_profession" id="validationCustom07" >
              <option selected disabled value="">תחום עיסוק</option>
              <option>עיצוב שיער</option>
              <option>לק ג'ל</option>
              <option> קוסמטיקה</option>
              <option>סטודיו </option>
            </select>
          
          </div>

        <div class="col-md-4">
          <label for="validationCustom03" class="form-label" >אימייל:</label>
          <input type="email" class="form-control"  name="b_email" id="validationCustom08" placeholder="example@gmail.com" >
    
        </div>
        

        <div class="col-md-4">
          <label for="validationCustom05" class="form-label"> שינוי תמונה:</label>
          <input type="file" class="form-control" name="b_photo" id="validationCustom11" accept="image/png, image/jpeg" >
          
        </div>


        <div class="col-12">
          <button class="btn btn" id="submit" id="changePass" type="submit" >שינוי סיסמה</button>
        </div>
      </form>
     </div>

     <button class="btn btn update "  id="submit" type="submit" onclick="document.location='#'" >  עדכן את פרטי העסק</button>



  </body>

  <script>
      document.getElementById("changePass").onclick=function(){
         window.location.href="<?php echo site_url('Intro/ go_to_b_change_password');?>"
     }
   
  </script>
 </html>