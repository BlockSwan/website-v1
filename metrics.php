<?php 
include ("php/dbconnect.php");
include ("admin/backend.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>BlockSwan</title>
    <!-- JQUERY -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="node_modules/go-binary/src/jquery.go-binary.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" 
    content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="Description" content="A platform allowing any individual to access
    blockchain technology knowledge or digital assets exposure within a
    transparent protocol and rewarding ecosystem." >

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/fonts.css">
    <link rel="stylesheet" href="CSS/media.css">
    <link rel="stylesheet" href="CSS/metrics/style.css">
    <link href="https://cdn.syndication.twimg.com/widgets/followbutton/info.json?screen_names=company_name">
    <link rel="icon" href="assets/BSWN.png">


    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2"></script>
  

   
    
   
</head>
<body>





<?php include('php/header.php')  ?>

    <?php

   
    $supply = 1000;


    ?>

  <!-- FIN HEAADER -->





  <!-- METRICSC -->
  <div class="container"> 

  <div class="row mt-3 mx-2">

      <div class="col-3 justify-content-center">
          <div class="row text-center"><p><span class="underline">Supply</span><br><span class="go-binary"><?php echo round($iBSWNsupply,2);?></span></p></div>
      </div>

      <div class="col-3 justify-content-center">
          <div class="row text-center"><p><span class="underline">iBSWN</span><br><span class="go-binary">$<?php echo round($iBSWNprice,2);?></span></p></div>
      </div>

      <div class="col-3 justify-content-center">
          <div class="row text-center"><p><span class="underline">Holders</span><br><span class="go-binary"><?php 
          echo $holder['nb_holder'];
          
          
          ?></span></p></div>
      </div>

      <div class="col-3 justify-content-center">
          <div class="row text-center"><p><span class="underline">AUM</span> <br><span class="go-binary">$<?php echo round($aum['aum'],2);?></span></p></div>
      </div>


      

  </div>

</div>





<!-- PORTFOLIO -->
<div class="container">
  <div class="overflow-auto" class="testsir">
    <div class="row mt-3 mx-2">
      <p><mark>INVESTMENT VEHICLE HOLDINGS</mark></p>

      <table class="table">
        <thead>
          <tr>
            <th scope="col text-center"></th>
            <th scope="col text-center">TICKER</th>
            <th scope="col text-center">SHARE</th>
            <th scope="col text-center">PRICE</th>
            <th scope="col text-center">AMOUNT</th>
            <th scope="col text-center">VALUE</th>

          </tr>
        </thead>

        <tbody>
        <tr>
        <?php $requete = $db->query("SELECT * FROM asset WHERE amount >0 ORDER BY value DESC");

    
      while($resultat = $requete->fetch())
      {
      
      ?>
            <th scope="row"><img src="assets/iconeAsset/<?php echo $resultat['icon']; ?>" alt="<?php echo $resultat['ticker']; ?>" class="iconAsset" ></th>
            <td class="go-binary"><?php echo $resultat['ticker']; ?></td>
            <td class="go-binary"><?php echo round($resultat['value']*100/$aum['aum'],2)."%"; ?></td>

            <td class="go-binary"><?php echo "$".round($resultat['price'],2);?></td>
            <td class="go-binary"><?php echo $resultat['amount']; ?></td>
            <td class="go-binary"><?php echo "$".round($resultat['value'],2); ?></td>
          </tr>
        </tbody>
        <?php 
 } ?>
      </table>

    </div>
  </div>
</div>

<div class="container"></div>


<!-- AADRESS -->

<div class="container">
<p id="titleHODLER"><mark>iBSWN HOLDERS</mark></p>
  <div class="overflow-auto" class="testsir">
    <div class="row mt-3 mx-2">
     
    
      <table class="table">
        <thead>
          <tr>
            <th scope="col"> RANK</th>
            <th scope="col"> ADDRESS </th>
            <th scope="col"> QUANTITY </th>
            <th scope="col"> PERCENTAGE </th>
            <th scope="col"> VALUE </th>

          </tr>
        </thead>

        <tbody>
        <tr>
        <?php $requete = $db->query("SELECT * FROM user WHERE balance >0 ORDER BY balance DESC");
      
      $compt=0;
        
      while($resultat = $requete->fetch())
      {
      
      ?>
            <th scope="row"><?php echo ++$compt; ?></th>
            <td class=""><?php echo "bswn".$resultat['publicKey']; ?></td>
            <td class="go-binary px-2"><?php echo round($resultat['balance'],2); ?></td>
            <td class="px-2">

                      <p class="go-binary px-2"><?php echo round($resultat['balance']*100/$iBSWNsupply,2)."%"; ?></p>
                      <div class="progress align-middle" style="height: 0.5vh;">
                        <div class="progress-bar" role="progressbar" aria-valuenow="" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo round($resultat['balance']*100/$iBSWNsupply,2)."%"; ?>">
                      </div>
                  
            
            </td>
            <td class="go-binary pr-2"><?php echo "$".round($resultat['balance']*$iBSWNprice,2); ?></td>

          
          </tr>
        </tbody>
        <?php  } ?>
      </table>

    </div>
  </div>
</div>


<!-- CHART -->

<div class="container text-center p-4" id="charts">
  <p id="assetAlloc"><mark>Graphs & Charts soon</mark></p>
</div>


  
<?php include('php/footer.php')?>

    

<script src="https://cdn.ilo.so/embed.js" async></script>
<script src="JS/binary.js"></script>
<script src="JS/typelib.js"></script>
<script src="JS/switch.js"></script>
<script src="JS/typewritter.js"></script>
<script src="JS/terminal.js"></script>


</body>
</html>