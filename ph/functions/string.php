<?php
$string = "one two three";
$ar = explode(" ",$string);
print_r($ar);

$a = 10;
echo printf("value of a is %d",$a);
echo "<br/>";
$str = "<";
echo htmlentities($str);

echo "<br/>";
$str = "Hello\nHi";
echo nl2br($str);

echo "<br/>";
$str = "yo";
echo ord($str);
echo "<br/>";
echo "<br/>";
echo "<br/>";
$a1=array("a"=>"red","b"=>"green","c"=>"blue",'d'=>'orange');
$a2=array("a"=>"red","c"=>"blue","d"=>"pink");

$result=array_diff_key($a1,$a2);
print_r($result);
?>