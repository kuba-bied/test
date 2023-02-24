<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <h1>Tabela 1</h1>
        <table border="1">
            <tr>
                <th>L.P</th>
                <th>Inne informacje</th>
            </tr>
<?php
    $i = 1;
    while ($i <= 10) {
        echo "<tr>";
            echo "<td>";
            echo $i . ".";
            echo "</td>";
            echo "<td>";
            echo "jeden.efwefwefwef";
            echo "</td>";
        echo "</tr>";
        $i++;
    }
?>
        </table>

        <h1>Tabela 2</h1>
        <table border="1">
<?php
    // łączenie z bazą danych
    $link = mysqli_connect('localhost', 'root', '', 'egzamin6');
    $zapytanie = "SELECT * FROM zadania WHERE miesiąc='lipiec'";
    $wyniki = mysqli_query($link, $zapytanie);
    $licznik = 1;

    while ($wiersz = mysqli_fetch_array($wyniki)) {
        echo "<tr>";
             echo "<td>";
            echo $licznik . ".";
             echo "</td>";
            echo "<td>";
                echo $wiersz['dataZadania'];
            echo "</td>";
            echo "<td>";
                echo $wiersz['wpis'];
            echo "</td>";
            echo "<td>";
                echo $wiersz['miesiąc'];
            echo "</td>";
            echo "<td>";
                echo $wiersz['rok'];
            echo "</td>";
        echo "</tr>";
    }

        // $teskt_bledu = mysqli_error($link);
        // echo $teskt_bledu
?>           
        </table>
    </body>
</html>