<?php   
include ("../php/dbconnect.php");

if (isset($_POST['addTerm'],$_POST['term'],$_POST['termDescription'])) {

$term = $_POST['term'];
$termDescription = $_POST['termDescription'];






$requete1 = $db->prepare("SELECT * FROM term WHERE name=?");
$requete1->execute([$term]); 
$termCheck = $requete1->fetch();


    

 
 

    if(empty($_POST['term']) || empty($_POST['termDescription'])) {
        $msgAddTerm = "Tout les champs doivent être complétés!";
    }
    else if ($termCheck) {
        $msgAddUser = "Term aleady in database";
    } 

    else {
        
        $ins = $db -> prepare('INSERT INTO term (name, description) VALUES (?, ?)');
        $ins ->execute(array($term, $termDescription));
        $msgAddTerm = "Term is added";
        

    } 

} 


?>