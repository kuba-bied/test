<?php
$wynik3= $_GET['koniec'];
$wynik1= $_GET['zdanie'];
$wynik2= $_GET['początek'];
$wynik4= $wynik2 - $wynik3;

echo '<h1> ' .$wynik1 .'</h1>' ;

echo '<h2> ' .$wynik2 .'</h2>' ;


echo '<h3> ' .$wynik3 . '</h3>' . '<h3>odległość ( ' .$wynik4 . ')</h3>';

?>
<style>



</style>