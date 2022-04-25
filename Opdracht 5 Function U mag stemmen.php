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
$geboortedatum = new DateTime('2010-01-01');
$vandaag = new DateTime(date('Y-m-d'));
$leeftijd = $vandaag->diff($geboortedatum);
$naam = "Tomi";
echo "Uw leeftijd is: " . $leeftijd->y . " jaar. " . "<br>";

if ($leeftijd->y >= 18) {
    echo "&#9702; $naam je bent oud genoeg om te stemmen." . "<br>";
    echo "&#9702; de stem grens is 18 jaar." . "<br>";	
} else {
    echo "&#9702; $naam je ben niet oud genoeg om te stemmen." . "<br>";
    echo "&#9702; De stem grens is 18 jaar.";
}    
    ?>
</body>
</html>

