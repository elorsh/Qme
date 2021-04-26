<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>p users view</title>
</head>
<body>
    

<h1>
    <?php
        foreach ($result as $object){

            echo $object->u_full_name. "<br>";
        }
    ?>
</h1>

</body>
</html>