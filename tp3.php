<?php 
$kw = rand(0,1500);
echo "los kilowats consumidos son $kw <br/>";
if ($kw <= 200)
$kw = $kw*0.5;
if ($kw > 200 && $kw < 1000)
$kw = $kw * 0.1;
if ($kw >= 1000)
$kw = $kw * 0.15;
echo "el importe es $kw";
?>