
<?php
include('settings.php');


$pokaz=$_GET['pokaz'];

echo '<table>';
echo '<tr>';
    echo '<td>imie</td>';
    echo '<td>Nazwisko</td>';
    echo '<td>Data Urodzenia</td>';
echo '</tr>';
echo '<tr>';
    echo '<td>'.$tab[$pokaz]['imie'].'</td>';
    echo '<td>'.$tab[$pokaz]['nazwisko'].'</td>';
    echo '<td>'.$tab[$pokaz]['dataUrodzenia'].'</td>';
echo '</tr>';
echo '</table>';
echo '<a href="./">powrót</a>';
?>