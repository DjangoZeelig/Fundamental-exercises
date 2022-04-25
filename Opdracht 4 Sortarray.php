<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $arrayMeubels = array("kast", "bank", "bed", "koelkast", "tafel");
    sort ($arrayMeubels);
    echo "de alfabetische volgorde van meubels is: " . "<br>";
$lenght = count($arrayMeubels);
    for ($a=0; $a<$lenght; $a++)
    {
        echo $arrayMeubels[$a] . "," . "<br>";
    } 
    

    ?>
</body>
</html>