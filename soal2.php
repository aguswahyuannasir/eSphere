<?php 

$input  = 1225441;

$arr1   = str_split($input);
$nol    = "0";
$z      = '0';
foreach($arr1 as $x){

    echo "$x".$z."<br>";
    $z .= $nol;

}

?>