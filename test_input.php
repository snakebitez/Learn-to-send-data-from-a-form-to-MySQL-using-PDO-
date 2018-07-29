<?php

function test_input($data) {
  
$data = htmlentities(stripslashes(htmlspecialchars(strip_tags(trim($data)))));

//echo "<br>data:  ".$data. "<br>";
return $data;

}
?>
