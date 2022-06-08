<?php

$user ='root';
$pass ='';

try
{
    $db = new PDO ('mysql:host=localhost;dbname=bdd_blockswan;charset=utf8', $user, $pass);
  
} catch (PDOException $e){
    print "Erreur :" . $e->getMessage() . "<br/>";
    die;
}

?>