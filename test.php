<?php


include ('php/dbconnect.php');
include ('admin/backend.php');

$get_data = $db->prepare("SELECT * FROM asset WHERE amount >0 ORDER BY value DESC");
    $get_data->execute();
    if($get_data->rowCount()>0){
    while($value = $get_data->fetch(PDO::FETCH_OBJ)){
        $ticker = $value->ticker;
        $price = $value->price;
        $amount = $value->amount;
        $share = $value->share;
        $result_array[] = ['ticker'=>$ticker, 'price'=>$price,  'amount'=>$amount, 'value'=>round($amount*$price,2), 'share' =>round($share,2)];
    }
    $result =  json_encode($result_array);
    echo $result;

    }





 
?>