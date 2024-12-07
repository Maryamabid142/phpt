  <?php

$name = "maryam";
$incomee = 2000;

echo "$name income is $incomee <br>";
echo "$name is a  inteligent girls <br>";
?>

<?php
$y = false;
$x = true;
echo var_dump( $y);
echo "<br>";
echo var_dump($x)
?>


<?php

echo "<br>";
$fruits = array("orange", "mango","banana","apple");
echo var_dump($fruits);
echo "<br>";
echo $fruits[1];
echo "<br>";
echo $fruits[0];
echo "<br>";
echo $fruits[2];
echo "<br>";
echo $fruits[3];
?>

<?php

$name = "maryam";
echo  $name;
echo"<br>";
echo "The length of"." my string". strlen($name);
?>

<?php
echo"<br>";
$name ="maryam is a inteligent girls";
echo  $name;

echo str_word_count($name);
echo"<br>";
echo strrev($name);
echo"<br>";
echo strpos  ($name, "is");
echo"<br>";
echo str_replace("maryam" , "Hina" , $name);
echo"<br>";
 echo str_repeat($name, 30);
 echo"<br>";

?>

<?php
echo "<pre>";
echo rtrim( "   This is a good girl  ");
echo"<br>";
echo ltrim(  "   This is a good girl   ");

?>