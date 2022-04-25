<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a = 1 ;
    while($a < 10){
        echo $a . "-";
        $a++;
        if ($a == 10){
            echo $a;
            break;
        }
    }
    ?>
</body>
</html>