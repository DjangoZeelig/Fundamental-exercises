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
$string = "ik ben een stukje tekst";
$arraystring = array($string );
foreach ($arraystring as $x) {
if (ctype_lower($x)) {
    echo "($x) bestaat volledig uit kleine letters." . "<br>";
}else {
    echo "($x) bestaat niet volledig uit kleine letters." . "<br>";
}
}

    ?>
</body>
</html>