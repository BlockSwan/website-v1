<?php    



// QUERY AUM
$sql = $db->query("SELECT SUM(value) AS aum FROM asset WHERE amount >0");
$aum = $sql->fetch();

// QUERY NB HOLDER
$sql = $db->query("SELECT COUNT(*) AS nb_holder FROM user WHERE balance>0");
$holder = $sql->fetch();

// QUERY DEPOSIT IBSWN
$sql = $db->query("SELECT SUM(IBSWNamount) AS IBSWNdeposit FROM txUser WHERE txType = 'DEPOSIT'");
$IBSWNdeposit = $sql->fetch();

// QUERY WITHDRAW IBSWN
$sql = $db->query("SELECT SUM(IBSWNamount) AS IBSWNwithdraw FROM txUser WHERE txType = 'WITHDRAWAL'");
$IBSWNwithdraw = $sql->fetch();

// Calculating Total Supply
$iBSWNsupply = $IBSWNdeposit['IBSWNdeposit'] - $IBSWNwithdraw['IBSWNwithdraw'];

//calculating iBSWN price
if ($iBSWNsupply<=0){
    $iBSWNprice = 2;
    $iBSWNsupply = 1;
} else{
    $iBSWNprice=$aum['aum']/$iBSWNsupply;

}
 


?>