<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
	<title>pętla for</title>
</head>

<body>
	<h1>a) pętla for (rosnąco)</h1>
<?php
	echo "+" . "<br>";
	for ($i = 0; $i < 10; $i++) {
		echo "-" . $i . "-<br>";
	}
	echo "+" . "<br>";
?>
	<h1>b) pętla for (malejąco)</h1>
<?php
	echo "+" . "<br>";
	for ($i = 10; $i > 0; $i--) {
		echo "-" . $i . "-<br>";
	}
	echo "+" . "<br>";
?>

	<h1>c) pętla for (rosnąco) skok co 10</h1>
<?php
	echo "+" . "<br>";
	for ($i0; $i < 100; $i = $i + 10) {
		echo "-" . $i . "-<br>";
	}
	echo "+" . "<br>";
?>


	<h1>d) pętla for (rosnąco) skok co 10 (2)</h1>
<?php
	echo "+" . "<br>";
	for ($i = 0; $i < 10; $i++) {
		$a = $i * 10;
		echo "-" . $a . "-<br>";
	}
	echo "+" . "<br>";
?>

	<h1>e) pętla for (rosnąco) skok co 1 od 1.2.3.itd </h1>
<?php
	echo "+" . "<br>";
	for ($i = 1; $i < 11; $i++) {
		$a = $i * 1;
		echo "-" . $a . "." .  "-<br>";
	}
	echo "+" . "<br>";
?>

<h1>f) pętla for +++++ potem 10x ----- potem 1x +++++ </h1>
<?php

	$ilosc_wierszy = 10;
	$liczba_kolumn = 5;	
	
for ($i = 0; $i < $liczba_kolumn; $i++) {
		echo "+";
	}
	echo "<br>";
	
	for ($x=0; $x<$ilosc_wierszy; $x++) {
		for ($i = 0; $i < $liczba_kolumn; $i++) {
			echo "-";
		}
		echo "<br>";

		}
	
	for ($i = 0; $i < $liczba_kolumn; $i++) {
		echo "+";
	}
	echo "<br>";



?>
<h1>g)tak, jak p. f), ale tabela, gdzie "+" są w th "-" sa w td</h1>


<?php

$ilosc_wierszy = 10;
	$liczba_kolumn = 5;	

echo"<table border = '1'>";


	echo "<tr>";
for ($i = 0; $i < $liczba_kolumn; $i++) {
		echo "<th>";
		echo "+";
		echo "</th>";
	}
	echo "</tr>";
	
	
	for ($x=0; $x<$ilosc_wierszy; $x++) {
		echo "<tr>";
		for ($i = 0; $i < $liczba_kolumn; $i++) {
			echo "<td>";
			echo "-";
			echo "</td>";
		}
		echo "</tr>";

		}

	echo "<tr>";
	
	for ($i = 0; $i < $liczba_kolumn; $i++) {
		echo "<th>";
		echo "+";
		echo "</th>";
	}
	echo "</tr>";


	echo "</table>"
?>

<h1>h)tak, jak p. g) ale tabela gdzie "-" jest napis np . x,y gdzie x - nr kolumny, y - nr wiersza</h1>
<?php
	$ilosc_wierszy = 10;
	$liczba_kolumn = 5;	

echo '<table class="tabelka" border = "1px solid black">';
	echo "<tr>";
	for ($i=0; $i <= 4 ; $i++) {
		echo "<th>";
		echo "+";
		echo "</th>";
	}
	echo "</tr>";
	for ($i=0; $i <=4; $i++) {
		echo "<tr>";

		for ($a=0; $a <=4 ; $a++) {
			echo "<td>";
			echo $i+1;
			echo ".";
			echo $a+1;
			echo "</td>";
		}
		echo "</tr>";
	}
		echo "<tr>";
		for ($c=0; $c <=4 ; $c++) {
			echo "<td>";
			echo "+";
			echo "</td>";
		}
		echo "</tr>";
		echo '</table>';

?>

<h1>i)tabliczka mnożenia</h1>
<table border="1 solid black">
<?php

for($a=0;$a<11;$a++)
{
	echo '<tr>';
	for ($i=0;$i<10;$i++) {
		echo '<td>'.$a*$i.'</td>';
	}
	echo '</tr>';
}

?>
</table>
</body>

</html>