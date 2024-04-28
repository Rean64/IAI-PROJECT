<?php

header('Content-type: text/css');

$bg = array('images/img1.jpg','images/img2.jpg','images/img3.jpg',);

$i = rand(0, count($bg)-1);
$selectBg = "$bg[$i]";
?>

body{
  background: url(<?php echo $selectBg; ?>);
  background-position: center;
  background-size:cover;
  height: 100vh;
}

