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
 
 $temperature = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
 $temperatureAverage = array_sum($temperature) / count($temperature);
 echo "The average temperature is: " . $temperatureAverage . "<br>";
 
 $temperature_unique = array_unique($temperature);
   sort ($temperature_unique);
    echo " List of five lowest temperatures :";
    for ($i=0; $i< 5; $i++)
    {
        echo $temperature_unique[$i] . ",";
    }
echo "<br>";

sort ($temperature_unique);
$temperature_unique_length = count($temperature_unique);
    echo " List of five highest temperatures :";
    for ($i=($temperature_unique_length-5); $i< $temperature_unique_length; $i++)
    {
        echo $temperature_unique[$i] . ",";
    }
    echo "<br>";
    ?>
</body>
</html>


