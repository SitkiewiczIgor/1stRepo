<form action="" method="POST">
    Podaj wagę osoby
    <input name="Waga">
    Podaj ilość wypitego trunku
    <input name="Ilość">
    <select name="trunek">
        <option name="Piwo" value="6">Piwo</option>
        <option name="Wino" value="12">Wino</option>
        <option name="Wódka" value="40">Piwo</option>

    <input type="submit" value="Submit">
</form>
<?php
    $waga=$_POST['Waga'];
    $ilość=$_POST['Ilość'];
    $procent=$_POST['Procent'];

?>