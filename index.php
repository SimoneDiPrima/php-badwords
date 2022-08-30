<?php 
$paragraph='Tre tigri contro tre tigri, tre tigri contro tre tigri, tre tigri contro tre tigri';
echo $paragraph;
echo '<br/><br/><br/>';
echo strlen($paragraph); 
echo '<br/><br/><br/>';
$species = $_GET["name"];
echo '<br/><br/><br/>';
echo $species;
$my_replaced_paragraph= str_replace($species,'***',$paragraph);
echo '<br/><br/><br/>';
var_dump($my_replaced_paragraph);
echo '<br/><br/><br/>';
echo strlen($my_replaced_paragraph);
?>