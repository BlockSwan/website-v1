<?php 
include ("dbconnect.php");
$asset = $resultat['ticker'];
$requete = $db->query("SELECT ticker FROM asset WHERE ticker=`$asset`");
$currentPrice = $requete->fetch();
echo $currentPrice;



$query = "SELECT ticker FROM asset WHERE ticker=?";
$stmt = $db->prepare($query);
$stmt->execute([$asset]);



?>

