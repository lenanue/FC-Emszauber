<?php

$db_link = mysqli_connect("localhost","root","","emszauber");

$vorname = $_POST['Vorname'];
$nachname = $_POST['Nachname'];
$geburtsdatum = $_POST['Geburtsdatum'];
$strasse = $_POST['Straße'];
$hausnummer = $_POST['Hausnummer'];
$postleitzahl = $_POST['Postlzeitzahl'];
$ort = $_POST['Ort'];
$telefonnummer = $_POST['Telefonnummer'];
$mobilnummer = $_POST['Mobilnummer'];

$sql = "INSERT INTO `mitglieder` (`ID`, `Vorname`, `Nachname`, `Geburtsdatum`, `Strasse`, `Hausnummer`,`Postleitzahl`,`Ort`,`Telefonnummer`,`Mobilnummer`) VALUES ('0', '$vorname', '$nachname', '$geburtsdatum', '$strasse', '$hausnummer','$postleitzahl','$ort','$telefonnummer', '$mobilnummer')";

$rs = mysqli_query($db_link, $sql);

if($rs)
{
    echo "Contact Records Inserted";
}

?>