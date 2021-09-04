<?php
$kw = $_GET['kw'];
$total = 0;
echo "Los kilowats consumidos por el usuario son de $kw kw <br/>";
if ($kw <= 200) {
    $total = $kw * 0.5;
    echo "el importe es de 50% por lo tanto... ";
    echo "el total a pagar es de: ", $kw + $total;
} else if ($kw > 200 && $kw < 1000) {
    $total = $kw * 0.1;
    echo "el importe es de 10% por lo tanto...";
    echo "el total a pagar es de: ", $kw + $total;
} else {
    $total = $kw * 0.15;
    echo "el importe es de 15% por lo tanto...";
    echo "el total a pagar es de: ", $kw + $total;
}