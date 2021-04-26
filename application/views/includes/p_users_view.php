<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>p users view</title>
</head>
<body>
    

<h1>
    <?php
        foreach ($results as $object){

            echo $object->u_full_name. "<br>";
        }
    ?>
</h1>

</body>
</html>