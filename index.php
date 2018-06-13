<?php include ('settings.php') ?>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/style.css">
    <title>szatnia</title>  
</head>
<body>
<form method="post"  action=''>
<input type="text" placeholder="podaj imię" name="imie">
<input type="text" placeholder="podaj nazwisko" name="nazwisko">
<input type="number" placeholder="podaj rok urodzenia" name="urodziny">
<input type="submit" value="wyślij!" name="wyslij">

</form>
<form method="post"  action=''>
wbierz nazwisko do zmiany
<select name="indeks">
<?php
// for($i=0; $i<count($tab); $i++){
foreach ($tab as $k=>$cokolwiek){
    echo '<option value="'.$k.'">'.$cokolwiek['nazwisko'].'</option>';
}
?>
</select>
<input type="text" placeholder="podaj nowe nazwisko" name="nowe">
<input type="submit" value="Zmien nazwisko!" name="zmien">
</form>
<table>
<tr>
    <td>Lp</td>
    <td>imie</td>
    <!-- <td>nazwisko</td>
    <td>data urodzenia </td> -->
    <td></td>
</tr>

<?php
// for($i=0; $i<count($tab); $i++){

$i=1;
foreach($tab as $k=>$row) {
echo '<tr>';
echo '<td>'.($i++).'</td>';
echo '<td><a href="detale.php?pokaz='.$k.'">'.$row['imie'].'</a></td>';
// echo '<td>'.$row['nazwisko'].'</td>';
// echo '<td>'.$row['dataUrodzenia'].'</td>';
echo '<td><a href="?usun='.$k.'">usuń linijkę</a></td>';
echo '</tr>';
}



?>







</table>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="js/jquery.waterwheelCarousel.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>

