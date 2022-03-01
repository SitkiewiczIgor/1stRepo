<?php
function silnia ($n) {
if ($n==1) {
    return 1; }
else {
    return $n*silnia($n-1);}
}
echo ("5 = ". silnia(5));
?>