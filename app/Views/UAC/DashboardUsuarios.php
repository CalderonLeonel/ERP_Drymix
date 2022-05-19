<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Title</title>
</head>
<body>
    <?php //print_r($users); ?>

    <?php
    foreach($users as $user){
        print_r($user['state']);

    } 
    ?>
</body>
</html>