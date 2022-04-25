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
$begin = 0;
$einde = 30;

$tekst = '';
$totaal = 0;

for ($i=$begin; $i <= $einde; $i++) { 
    $tekst .= $i==$begin ? $i : '+' . $i;
    $totaal += $i;
}

echo $tekst . '=' . $totaal
    ?>
</body>
</html>