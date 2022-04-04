<form action="" method="POST">
    Podaj cene z litr benzyny:
    <input name="cenaB"><br>
    Podaj ilość litrów benzyny:
    <input name="IlośćLB"><br>
    Podaj cene Disel:
    <input name="cenaD"><br>
    Podaj ilość litrów Disel:
    <input name="IlośćLD"><br>
    <input type="submit" value="Submit">
</form>
<?php
    $cenaBenzyny=$_POST['cenaB'];
    $ilośćBenzyny=$_POST['IlośćLB'];
    $cenaDisel=$_POST['cenaD'];
    $ilośćdisel=$_POST['IlośćLD'];
    $Wynik1=($cenaBenzyny*$ilośćBenzyny);
    $Wynik2=($cenaDisel*$ilośćdisel);
    $ŁącznaSumaDoZapłaty=($Wynik1+$Wynik2);
    
    echo "Kwota do zapłaty za benzyne: ".($Wynik1)."<br>";

    echo "Kwota do zapłaty za Diesel: ".($Wynik2)."<br>";

    echo "Łączna kwota do zapłaty: ".($ŁącznaSumaDoZapłaty)."<br>";


    
?>