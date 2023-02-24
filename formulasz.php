<?php
    
    $text = "Ala ma kota";
    $f= substr($text, 2, 5);
    echo '<h1>' . $text . '</h1>';
    $d= strlen($text);
    echo '<h2>' . $d. '</h2>';
    echo '<h2>' . $f. '</h2>';
    
?>
<form action="./wyswietl.php" method="get">
    <label for="zdanie">Zadanie <input type="text" name="zdanie" value="Ala ma kota"></label>
                        <br>
    <label for="początek"> Początek<input type="number" name="początek" value="2"></label>
                        <br>
    <label for="koniec "> Koniec <input type="number" name="koniec" value="7"></label>
                        <br>
                        <hr>
    <input type="submit" value="Wykonaj">

     
</form>
