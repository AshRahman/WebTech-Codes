<?php
  $x = array(1, 2, 3, 4, 5); 
  
   #unset($x[4]);
   #$x2=array_values($x);
   #var_dump($x); 
    #echo "<br>";
    var_dump($x);
    echo nl2br("\n");
    if (($key = array_search("4", $x)) !== false) {
      unset($x[$key]);
      $x2 = array_values($x);
  }
  var_dump($x2);
   
?>