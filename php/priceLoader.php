<?php   
include ('dbconnect.php');
include ('../admin/backend.php');

//UOS

  $curl = curl_init('https://api.coingecko.com/api/v3/simple/token_price/ethereum?contract_addresses=0xd13c7342e1ef687c5ad21b27c2b65d772cab5c8c&vs_currencies=usd');
  curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($curl,CURLOPT_RETURNTRANSFER, true);
  $data = curl_exec($curl);
  if ($data === false){
  var_dump(curl_mul_error($curl));
  } else{
  $data= json_decode($data, true);
  }
  curl_close($curl);
  $tokenAdress = '0xd13c7342e1ef687c5ad21b27c2b65d772cab5c8c';
  $price = $data[$tokenAdress]['usd'];
  $db->exec("UPDATE asset SET price = $price WHERE ticker='UOS'");



 // PKN 

 $curl = curl_init('https://api.pancakeswap.info/api/v2/tokens/0x4B5DeCb9327B4D511A58137A1aDE61434AacdD43');
 curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
 curl_setopt($curl,CURLOPT_RETURNTRANSFER, true);
 $data = curl_exec($curl);
 if ($data === false){
 var_dump(curl_mul_error($curl));
 } else{
 $data= json_decode($data, true);
 }
 curl_close($curl);
 $price =$data['data']['price'];
 //CHANGE TOKEN
 $db->exec("UPDATE asset SET price = $price WHERE ticker='PKN'");






    // AUdIO 


    $curl = curl_init('https://api.coingecko.com/api/v3/simple/token_price/ethereum?contract_addresses=0x18aaa7115705e8be94bffebde57af9bfc265b998&vs_currencies=usd');
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl,CURLOPT_RETURNTRANSFER, true);
    $data = curl_exec($curl);
    if ($data === false){
    var_dump(curl_mul_error($curl));
    } else{
    $data= json_decode($data, true);
    }
    curl_close($curl);

    $tokenAdress = '0x18aaa7115705e8be94bffebde57af9bfc265b998';
    $price= $data[$tokenAdress]['usd'];

    $db->exec("UPDATE asset SET price = $price WHERE ticker='AUDIO'");



    

      // AURY
            //CHANGE ADRESS
            $curl = curl_init('https://api.coingecko.com/api/v3/simple/token_price/solana?contract_addresses=AURYydfxJib1ZkTir1Jn1J9ECYUtjb6rKQVmtYaixWPP&vs_currencies=usd');
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($curl,CURLOPT_RETURNTRANSFER, true);
            $data = curl_exec($curl);
            if ($data === false){
            var_dump(curl_mul_error($curl));
            } else{
            $data= json_decode($data, true);
            }
            curl_close($curl);
            //CHANGE TOKEN
            $tokenAdress = 'AURYydfxJib1ZkTir1Jn1J9ECYUtjb6rKQVmtYaixWPP';
            $price= $data[$tokenAdress]['usd'];
  
            $db->exec("UPDATE asset SET price = $price WHERE ticker='AURY'");
      

         

         // eGLD
                //CHANGE ADRESS
                
                $curl = curl_init('https://api.pancakeswap.info/api/v2/tokens/0xbf7c81fff98bbe61b40ed186e4afd6ddd01337fe');
                curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($curl,CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($curl);
                if ($data === false){
                var_dump(curl_mul_error($curl));
                } else{
                $data= json_decode($data, true);
                }
                curl_close($curl);
                $price =$data['data']['price'];
                //CHANGE TOKEN
               
                $db->exec("UPDATE asset SET price = $price WHERE ticker='EGLD'");


//UPDATE ASSET VALUE

$db->exec("UPDATE asset SET value = price * amount");

//UPDATE ASSET SHARE

$sql = $db -> prepare('UPDATE asset SET share=value/?*100');
$sql ->execute(array($aum['aum']));

             




?>