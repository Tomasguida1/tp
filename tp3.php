<?php 
$kw = rand(0,1500);
echo "los kilowats consumidos son $kw <br/>";
if ($kw <= 200)
$kw = $kw*0.5;