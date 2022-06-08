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
    <link rel="stylesheet" href="CSS/learn.css">
    <link href="https://cdn.syndication.twimg.com/widgets/followbutton/info.json?screen_names=company_name">
    <link rel="icon" href="assets/BSWN.png">


    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  

   
    
   
</head>
<body>





<?php include('php/header.php')  ?>
<div class="container">
    <div class="row text-center">
        <ul class="nav nav-tabs d-flex justify-content-end p-2" id="myTab" role="tablist">
            <li class="nav-item text-center" role="presentation">
                <button class="nav-link active" id="blockchain-tab" data-bs-toggle="tab" data-bs-target="#blockchain" type="button" role="tab" aria-controls="blockchain" aria-selected="true">Blockchain</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="crypto-tab" data-bs-toggle="tab" data-bs-target="#crypto" type="button" role="tab" aria-controls="crypto" aria-selected="false">Crypto</button>
            </li>
          

        </ul>
    </div>
</div>
<div class="container" id="tabZone">
    <div class="row">
        <div class="tab-content" id="myTabContent">

                <!-- BLOCKCHAIN TAB -->
            <div class="tab-pane fade show active" id="blockchain" role="tabpanel" aria-labelledby="blockchain-tab"><p>
                
             <!-- DESCRIPTION -->

            <div class="row p-2">
                        <div class="intro p-2">
                        You can find here a lists of blockchain related terms sorted from A to Z. Feel free to share ideas and proposals in the corresponding <a href="https://discord.gg/ffrzhYEn57"><i style="text-decoration:underline;">Discord</i></a> Channel!
                        </div>
                </div>
                    
                

                <div class="row mb-4">
                    <!-- ACCORDION -->
                    
                    <div class="accordion accordion-flush" id="accordionExample">
                        <p class ='text-center pt-2' style='font-size:2vh;'> Dictionary</p>
                             


                    <?php $requete = $db->query("SELECT * FROM term ORDER BY name ASC");
                    $letter='Z';
                     while($resultat = $requete->fetch())
                        {
                     ?>

                        <?php 
                        
                        if(strtoupper($resultat["name"][0])!=$letter){
                            $letter=strtoupper($resultat["name"][0]);
                            ?>
                            <div class="letterTitle text-center" id="<?php echo $resultat["name"][0]; ?>">  <?php echo strtoupper($resultat["name"][0]); ?> </div>
                           
                        <?php  }   ?>
                        
                     
                      

                    <!-- ITEM  -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading<?php echo str_replace(' ', '',$resultat['name']); ?>">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo str_replace(' ', '',$resultat['name']); ?>" aria-expanded="false" aria-controls="collapse<?php echo str_replace(' ', '',$resultat['name']);?>">
                                > <?php echo $resultat['name']; ?> 
                                </button>
                            </h2>
                            <div id="collapse<?php echo str_replace(' ', '',$resultat['name']); ?>" class="accordion-collapse collapse" aria-labelledby="heading<?php echo str_replace(' ', '',$resultat['name']); ?>" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                <?php echo $resultat['description']; ?>
                                </div>
                            </div>
                        </div> 
                    <?php } ?>
                </div>

            </div>

        </div>


        <div class="tab-pane fade p-2" id="crypto" role="tabpanel" aria-labelledby="crypto-tab">
                <!-- DESCRIPTION -->

                <div class="row p-2  pt-3">
                        <div class="intro p-2">
                        You may find more details about some digital assets. Feel free to share ideas and proposals in the corresponding <a href="https://discord.gg/ffrzhYEn57"><i style="text-decoration:underline;">Discord</i></a> Channel!
                        </div>
                </div>
                    
                

                <div class="row mb-4">
                    <!-- ACCORDION -->
                    
                    <div class="accordion accordion-flush" id="accordionExample2">
                       <p class ='text-center pt-2' style='font-size:2vh;'>Asset Details</p>
                    <?php $requete = $db->query("SELECT * FROM asset ORDER BY ticker ASC");
                     while($resultat = $requete->fetch())
                        {
                     ?>
                      <?php 
                        
                        if($resultat['ticker'][0]!=$letter){
                            $letter=$resultat['ticker'][0];
                            ?>
                            <div class="letterTitle text-center" id="<?php echo $resultat["ticker"][0]; ?>">  <?php echo $resultat["ticker"][0]; ?> </div>
                           
                        <?php  }   ?>

                    <!-- ITEM  -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading<?php echo $resultat['ticker'];?>">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $resultat['ticker']; ?>" aria-expanded="false" aria-controls="collapse<?php echo $resultat['ticker'];?>">
                                <img src="assets/iconeAsset/<?php echo $resultat['icon']; ?>" alt="<?php echo $resultat['ticker']; ?>" class="iconCrypto" > <?php echo "&nbsp".$resultat['ticker']; ?> 
                                </button>
                            </h2>
                            <div id="collapse<?php echo $resultat['ticker']; ?>" class="accordion-collapse collapse" aria-labelledby="heading<?php echo $resultat['ticker'];?>" data-bs-parent="#accordionExample2">
                                <div class="accordion-body">
                        

                                   
                                    <div class="row">

                                    <?php if($resultat['whitepaper']){ ?>
 
                                        <div class="col-4">
                                            <a href="<?php echo $resultat['whitepaper'];?>" target="_blank">
                    
                                                <p class="assetLink text-center"><i class="bi bi-paperclip"> </i>Whitepaper</p>
                                             </a>
                                        </div>
                                        <?php  } ?>

                                        <?php if($resultat['sourceCode']){ ?>

                                        <div class="col-4">
                                            <a href="<?php echo $resultat['sourceCode'];?>" target="_blank">
                    
                                                <p class="assetLink text-center"><i class="bi bi-code-slash"> </i>Source Code</p>
                                             </a>
                                        </div>
                                        <?php  } ?>

                                        <?php if($resultat['website']){ ?>

                                        <div class="col-4">
                                            <a href="<?php echo $resultat['website'];?>" target="_blank">
                    
                                                <p class="assetLink text-center"><i class="bi bi-globe"> </i>WebSite</p>
                                             </a>
                                        </div>
                                        <?php  } ?>

                                    </div>
                                    <br>
                                <!-- TradingView Widget BEGIN -->
                                    <div class="tradingview-widget-container">
                                    <div class="tradingview-widget-container__widget"></div>
                                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
                                    {
                                    "symbol": "<?php echo $resultat['exchange'];?>:<?php echo $resultat['ticker'];?>USDT",
                                    "width": "100%",
                                    "height": "100%",
                                    "locale": "fr",
                                    "dateRange": "1D",
                                    "colorTheme": "dark",
                                    "trendLineColor": "rgba(255, 255, 255, 1)",
                                    "underLineColor": "rgba(203, 203, 203, 0.3)",
                                    "underLineBottomColor": "rgba(203, 203, 203, 0)",
                                    "isTransparent": true,
                                    "autosize": true,
                                    "largeChartUrl": ""
                                    }
                                    </script>
                                    </div>
                                    <!-- TradingView Widget END -->
                                    <br>

                                    <p>
                                        <?php echo $resultat['description']; ?>
                                    </p>

                                </div>
                            </div>
                        </div> 
                    <?php } ?>
                </div>

            </div>





        </div>

      


       

    </div>

    </div>
</div>



  
<?php include('php/footer.php')?>

    

<script src="https://cdn.ilo.so/embed.js" async></script>
<script src="JS/binary.js"></script>
<script src="JS/switch.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>



</body>
</html>