<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>title</title>
</head>
<body>
	<h1>a) instrukcja warunkowa if</h1>
	
<?php
	/*		Wyświetlamy napis "test" kiedy liczba jest
			jest ... od zmiennej $jakasliczba
			operator:
	==		**równe
	!=		**różne
	<		mniejsze
	<=		mniejszcze lub równe
	>		więsze
	>=		większe lub równe
	===		równe i tego samego typu
	*/	

	$jakasliczba = 10;

	if ($jakasliczba ?? 5) {
		echo('test');
	}

	/**
	 * Napisz pętle for, która wyświetli liczby
	 * jedna pod drugą 1 - 10
	 * (może być jako <ul>, albo z użyciem <br>)
	 * jeżeli liczba będzie równa 5 to za ta
	 * liczba będzie wyświetlona z kropką
	 */

	 $jakaliczba =10;

	 if ($jakaliczba == 5) echo('test');
	for ($i=0; $i<11; $i++){
		if($i ==5) {
			echo "(" . $i .")" . "<br>";
		} else {
			echo $i. "<br>";
	 }
	}

	/**
	 * Napisz pętle for, która wyświetli liczby
	 * jedna pod drugą 1 - 10
	 * (może być jako <ul>, albo z użyciem <br>)
	 * jeżeli reszta z dzielenia przez 2 = 0
	 */
	for ($i=1; $i<=10; $i++) {
		echo $i;
		if (($i % 2) == 0)
			echo ".";
		echo "<br>;";
	}
?>
<p>---------------------------------------------------------</p>
<?php
	/**
	 * Napisz pętle for, która wyświetli liczby
	 * jedna pod drugą 1 - 10
	 * (może być jako <ul>, albo z użyciem <br>)
	 * jeżeli liczba będzie wyświetlona z kropką
	 * w przeciwnym wypadku z gwiazdką
	 */
	for ($i=1; $i<=10; $i++) {
		echo $i;
		if($i == 5) {
			echo ".";
		} 
		else {
			echo "*";
		}
		echo "<br>";
	}

	/**
	 * Napisz pętle for, która wyświetli liczby
	 * jedna pod drugą 1 - 12
	 * (może być jako <ul>, albo z użyciem <br>)
	 * liczby podzielne przez 3 są czerwone
	 * liczby podzielne przez 3 z resztą 1 są zielone
	 * liczby podzielne przez 3 z resztą 2 są niebieskie
	 */

	for ($y=0; $y<=6; $y++) {
		if($y % 1 == 0) {
			echo "<div class='red'>" . $y . "</div>";
		}

		if($y % 1 == 6) {
			echo "<div class='green'>" . $y . "</div>";
		}

		//if($y % 3 == 1) {
			//echo "<div class='purple'>" . $y . "</div>";
		//}
	}

	for ($y=0; $y>=6; $y++) {
		if($y % 1 == 0) {
			echo "<div class='red'>" . $y . "</div>";
		}

		if($y % 1 == 6) {
			echo "<div class='green'>" . $y . "</div>";
		}

		//if($y % 3 == 1) {
			//echo "<div class='purple'>" . $y . "</div>";
		//}
	}
	?>
	<style> 
		.red {
			color: red;
		}
		.green {
			color: green;
		}
		.purple {
			color: purple;
		}
	</style>

</body>
</html>