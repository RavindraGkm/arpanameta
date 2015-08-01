<?php

$ar = array(
    'color'=>'red',
    'height'=>30,
    'width'=>50,
    'address'=>array(
        'hno'=>258,
        'land_mark'=>'Near law college'
    )
);

if(is_array($ar['address'])) {
    echo $ar['address']['hno'];
    echo "<br/>";
}

foreach($ar as $key => $val) {
    echo $key." => ".$val."<br/>";
}


$two_d = array(
    array(1,2,3),
    array(4,5,6),
    array(7,8,9)
);

for ($i=0;$i<count($two_d);$i++) {
    for($j=0;$j<count($two_d[$i]);$j++) {
        echo $two_d[$i][$j]." ";
    }
    echo "<br/>";
}

echo "<br/>";

foreach($two_d as $arr) {
    foreach($arr as $val) {
        echo $val." ";
    }
    echo "<br/>";
}

?>