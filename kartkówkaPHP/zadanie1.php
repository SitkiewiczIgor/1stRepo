<form action="" method="POST">
Podaj swoje imie 
<input name="imie"><br>
Podaj swoje nazwisko
<input name="nazwisko"><br>
Podaj pozycje do usunięcia
<input name="numer"><br>
<input type="submit" name="Submit">

</form>
<?php
$sl =$_POST['imie'];
$nr =$_POST['numer'];
$naz =$_POST['nazwisko'];
function __toString($sl, $nr, $naz){
    return $sl;
    return $nr;
    return $naz;

}
echo substr($sl, 0, $nr)."<br>";

echo substr($naz, 0, $nr);
?>