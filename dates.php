<?php
date_default_timezone_set("Asia/Kolkata");
echo date('Y-m-d');
echo "<br/>";
echo date('d-m-Y');
echo "<br/>";
echo date('d-m-Y h:m:s');
$date=date_create_from_format("d-M-Y","30-Aug-2015");
echo "<br/>";
echo date_format($date,"M d, Y");
?>