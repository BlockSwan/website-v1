<?php   
include ("../php/dbconnect.php");

function generateRandomString($length = 40) {
    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyz', ceil($length/strlen($x)) )),1,$length);
}


if (isset($_POST['addUser'],$_POST['pseudo'],$_POST['email'])) {

$pseudo = $_POST['pseudo'];
$mailUser = $_POST['email'];
$publicKey = generateRandomString();





$requete1 = $db->prepare("SELECT * FROM user WHERE pseudo=?");
$requete1->execute([$pseudo]); 
$user = $requete1->fetch();

$requete2 = $db->prepare("SELECT * FROM user WHERE email=?");
$requete2->execute([$mailUser]); 
$mail = $requete2->fetch();

$requete3 = $db->prepare("SELECT * FROM user WHERE publicKey=?");
$requete3->execute([$publicKey]); 


do {
    $publicKey = generateRandomString();
    $keyPublic = $requete3->fetch();
} while ($keyPublic == $publicKey);
     
    

 
 

    if(empty($_POST['pseudo']) || empty($_POST['email'])) {
        $msgAddUser = "Tout les champs doivent être complétés!";
    }
    else if ($user) {
        $msgAddUser = "Username already taken";
    } 
    else if ($mail){
            $msgAddUser = "email is already in database";
    }

    else {
        
        $ins = $db -> prepare('INSERT INTO user (pseudo, publicKey, email, dateinscription) VALUES (?, ?, ?, NOW())');
        $ins ->execute(array($pseudo, $publicKey ,$mailUser));
        $msgAddUser = "User wallet created";
        

    } 

} 

// CHECK IF PSEUDO EXIST
// MAX PSEUDO LENGHT 
// VALID EMAIL 


?>