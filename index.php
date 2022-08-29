<?php 
$paragraph='Tre tigri contro tre tigri, tre tigri contro tre tigri, tre tigri contro tre tigri';
echo $paragraph;
echo '<br/><br/><br/>';
echo strlen($paragraph); 
echo '<br/><br/><br/>';
$numbers=  $_GET['numbers'];
$species = $_GET['name'];
echo $numbers;
echo '<br/><br/><br/>';
echo $species;
$my_replaced_paragraph= str_replace($species,'ippopotami',$paragraph);
echo '<br/><br/><br/>';
echo $my_replaced_paragraph;
echo '<br/><br/><br/>';
?>