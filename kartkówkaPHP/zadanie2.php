<form action="" method="POST">
    Podaj liczbe do silni
    <input name="liczba">
    <input type="submit" name="Submit">
</form>
<?php
$n =$_POST ['liczba'];
function silnia ($n) {
if ($n==1) {
    return 1; 
    }
else {
    return $n*silnia($n-1);
    }
}
echo  (silnia($n));
?>
