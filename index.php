<?php 
$paragraph='Tre tigri contro tre tigri, tre tigri contro tre tigri, tre tigri contro tre tigri';
echo $paragraph;
echo '<br/><br/><br/>';
echo strlen($paragraph); 
echo '<br/><br/><br/>';
$numbers=  $_GET['numbers'];
$species = $_GET['name'];
$new_song = "$numbers $species"


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> <?php echo $new_song ?></h1>
</body>
</html>
