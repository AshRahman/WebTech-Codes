<?php
    $length=50;
    $width=50;
    if($length==$width){
        echo "the shape is a square";
    }
    else{
        $Area=$length*$width;
        $Perimeter=2*($length+$width);
        echo "$Area<br>";
        echo "$Perimeter";

    }

?>