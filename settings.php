<?php
session_start();

$tab = array();
$tab=$_SESSION['dowolnaNazwa'];
// $tab[] = ['imie' =>'Paweł', 'nazwisko' =>'Nowak', 'dataUrodzenia' =>'1990'];
// $tab[] = ['imie' =>'Anna', 'nazwisko' =>'Korus', 'dataUrodzenia' =>'1998'];
// $tab[] = ['imie' =>'Staszek', 'nazwisko' =>'Pieczarka', 'dataUrodzenia' =>' 2001'];



$obecny=date('Y');



if (isset($_POST['wyslij'])){
    $urodziny=$_POST['urodziny'];
    $imie=$_POST['imie'];
    $nazwisko=$_POST['nazwisko'];
$tab[]=['imie'=>$imie, 'nazwisko'=>$nazwisko, 'dataUrodzenia' =>$urodziny];
}



function wiek($x,$y) {
    $wiek=( $x-$y);
    return $wiek;
}









for($i=0; $i<count($tab); $i++){
//echo $tab[$i]['nazwisko'];
}


if(isset($_POST['zmien'])){
    $indeks=$_POST['indeks'];
    $nowe=$_POST['nowe'];

    $tab[$indeks]['nazwisko']=$nowe;

    print_r($tab[$indeks]);
}





// for($i=0;$i<count($tab);$i++) {
//     $wiek=$tab[$i]['dataUrodzenia'];
//     $roznica=$wiek-5;
//     $tab[$i]['dataUrodzenia']=$roznica;
// }


if(isset($_GET['usun'])){
    $index = $_GET['usun'];
    unset($tab[$index]);
}

// echo '<pre>';
// print_r($tab);
// echo '</pre>';

$_SESSION['dowolnaNazwa']=$tab;

?>



