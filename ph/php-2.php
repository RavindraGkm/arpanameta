<?php

$ar = array(1,2,4,5,6);

//echo count($ar);

for($i=0;$i<count($ar);$i++) {
    echo $ar[$i]."<br/>";
}

echo "<br/>";

foreach($ar as $val) {
    echo $val."<br/>";
}

$ar[] = 10;


echo "<br/>";

foreach($ar as $val) {
    echo $val."<br/>";
}

//$arr[] = 1;
//$arr[] = 2;
//$arr[] = 3;
//
//echo "<br/>";
//
//foreach($ar as $val) {
//    echo $val."<br/>";
//}

?>