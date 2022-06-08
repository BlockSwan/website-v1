<?php     
include ("../php/dbconnect.php");
include ('backend.php');


// DEPOSIT

if (isset($_POST['UserDeposit'],$_POST['assetUserTx'],$_POST['publicKey'],$_POST['amount'])) {

    $assetName = $_POST['assetUserTx'];
    $tx_PublicKey = $_POST['publicKey'];
    $amountAsset = doubleval($_POST['amount']);
    $txType = "DEPOSIT";
  


    

    if(empty($_POST['assetUserTx']) || empty($_POST['publicKey']) || empty($_POST['amount'])) {
        $msgAddTxUser = "Tout les champs doivent être complétés!";
    } else {
        $sql = $db->query('SELECT price FROM asset WHERE ticker="'.$assetName.'"');
        $assetPrice = $sql->fetch();
        $fiatValue = $assetPrice['price']*$amountAsset;
        $iBSWNamount = $fiatValue/$iBSWNprice;

        // Add the transaction to the user tx ledger

        $ins = $db -> prepare('INSERT INTO txUser (txType, tx_publicKey, fiatvalue, iBSWNamount, executiondate, assetAmount, assetID) VALUES (?, ?, ?, ?, NOW(), ?,?)');
        $ins ->execute(array($txType, $tx_PublicKey, $fiatValue, $fiatValue/$iBSWNprice, $amountAsset,$assetName));
    
        // Update current asset holdings

        $sql = $db -> prepare('UPDATE asset SET amount=amount+? WHERE ticker=?');
        $sql2 = $db -> prepare('UPDATE user SET balance=balance+? WHERE publicKey=?');
        $sql ->execute(array($amountAsset, $assetName));
        $sql2 ->execute(array(doubleval($fiatValue/$iBSWNprice), $tx_PublicKey));
        // Update user acccount balance

    
        

    }    

}


// WITDHRAW

if (isset($_POST['UserWithdraw'],$_POST['assetUserTx'],$_POST['publicKey'],$_POST['amount'])) {

    $assetName = $_POST['assetUserTx'];
    $tx_PublicKey = $_POST['publicKey'];
    $amountAsset = doubleval($_POST['amount']);
    $txType = "WITHDRAWAL";
  


    

    if(empty($_POST['assetUserTx']) || empty($_POST['publicKey']) || empty($_POST['amount'])) {
        $msgAddTxUser = "Tout les champs doivent être complétés!";
    } else {
        $sql = $db->query('SELECT price FROM asset WHERE ticker="'.$assetName.'"');
        $assetPrice = $sql->fetch();
        $fiatValue = $assetPrice['price']*$amountAsset;
        $iBSWNamount = $fiatValue/$iBSWNprice;

        // Add the transaction to the user tx ledger

        $ins = $db -> prepare('INSERT INTO txUser (txType, tx_publicKey, fiatvalue, iBSWNamount, executiondate, assetAmount, assetID) VALUES (?, ?, ?, ?, NOW(), ?,?)');
        $ins ->execute(array($txType, $tx_PublicKey, $fiatValue, $fiatValue/$iBSWNprice, $amountAsset,$assetName));
    
        // Update current asset holdings

        $sql = $db -> prepare('UPDATE asset SET amount=amount-? WHERE ticker=?');
        $sql ->execute(array($amountAsset, $assetName));

        // Update user acccount balance
        $sql = $db -> prepare('UPDATE user SET balance=balance-? WHERE publicKey=?');
        $sql ->execute(array($iBSWNamount, $tx_PublicKey));

    }    

}


?>