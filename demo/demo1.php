<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP page</title>
</head>
<body>
    <h1> Hello i am php  </h1>
    
    <?php
    // можно либо html инкрустировать в php
        date_default_timezone_set('Europe/Moscow');
        $x = 2;
        $y = 2;
        $result = $x + $y;
        echo("<h3>Result: $result</h3>");
        $now = date("H-i-s");
        echo("<h3>Page opened at $now</h3>");
    ?>
     <!-- a можно либо php инкрустировать в html более предпочтительный способ -->
    <h3>Page opened at <?=$now?></h3>
    <p> thats all folks</p>
</body>
</html>