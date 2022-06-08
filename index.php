<?php realpath('index.php'); ?>
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
    <link rel="icon" href="assets/BSWN.png">


   
    
   
</head>
<body>




<div class="header mb-1">

    <div class="container mt-3 px-4">
        <div class="row" id="topBar">

                <!-- MENU nAV -->

            <div class="col-10 text-start align-middle d-flex">
                <div class="row">
                    <div class="col-6">
                        <a href="metrics.php"  class="menu"><span class="label">metrics</span></a> 
                    </div>  

                    <div class="col-6">
                    <a class="soon" class="menu" href='learn.php'><span class="label">learn</span></a> 
                    </div> 
                   
                </div>
            </div>
            
            <div class="col-2 text-end">
                    
                    <!-- TOGGLER DAY/NIGHT -->
                <div class="container align-middle">
                    <label class="switch" for="checkbox">
                        <input type="checkbox" id="checkbox" />
                        <div class="slider round"></div>
                    </label>
                </div>
            </div>
        </div>

    </div>
</div>   



     <!--  Section Logo + Typo      !--> 
    
   
    
 
    
<div class="container pt-3">

    <div class="row justify-content-center"> 
        <img  id="bswngif" src="assets/gifBSWN.gif" alt="BlockSwan">
    </div>

    <div class="row justify-content-center">
        <img id="bswn" src="assets/typoWhite.png" alt="BlockSwan">
    </div>
        
    
    <div class="row text-center px-4 pt-4">
        <p> Blockchain and Digital Assets Organisation powered by Community Intelligence</p>
    </div>

    
    <div id="socialLink" class="row  mb-2">
    
        <div class="col d-flex justify-content-center">

            <div class="link col-1 text-center">
                <a  target="_blank" href="https://twitter.com/BlockSwanHQ">
                <i class="bi bi-twitter"></i>
                </a>
            </div>

            <div class="link col-1 text-center">
                <a target="_blank" href="https://www.instagram.com/blockswanhq/?hl=en">
                <i class="bi bi-instagram"></i>
                </a>
            </div>

            <div class="link col-1 text-center">
                <a target="_blank" href="https://discord.gg/ffrzhYEn57">
                <i class="bi bi-discord"></i>
                </a>
            </div>

            <div class="link col-1 text-center">
                <a target="_blank" href="https://www.facebook.com/blockswanhq">
                <i class="bi bi-facebook"></i>
                </a>
            </div>

            <div class="link col-1 text-center">
                <a target="_blank" href="https://github.com/BlockSwan">
                <i class="bi bi-github"></i>
                </a>
            </div>

            <div class="link col-1 text-center">
                <a target="_blank" href="https://www.linkedin.com/company/blockswan-dao/">
                <i class="bi bi-linkedin"></i>
                </a>
            </div>

            <div class="link col-1 text-center">
                <a target="_blank" href="https://www.linkedin.com/company/blockswan-dao/">
                <i class="bi bi-youtube"></i>
                </a>
            </div>
        </div>
            
    
    </div>
           
</div>
    
 
    
    
    <!--  ANIMATIOON TEXT--> 
    
<section class="wrapper text-center pt-2">

    <p id="caption"> It's all about <span
        class="txt-rotate"
        data-period="1500"
        data-rotate='[ "NFTs.", "DAOs.", "Crypto.", "Tech.", "DeFi." ]'>
        </span>    
    </p> 
        
</section>
    
    
    
       
    
    <!--  DISCORD ET NOTION LINKS--> 
    
<section id="groupBouton" class="py-2">
    <div class="container">
        <div class="row text-center">
            
            <ul>
                <li><a class="bouton" id="office" target="_blank" href="https://discord.gg/ffrzhYEn57">> Virtual Office&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
            </ul>

            <ul>
                <li><a class="bouton" target="_blank" href="https://repository.blockswan.finance/">> Network Repository&nbsp;</a></li>
            </ul>
            
            <ul>
                <li><a class="bouton" target="_blank" href="https://whitepaper.blockswan.finance/">> Protocol WhitePaper</a></li>
            </ul>
        
            
        </div>

    </div>
 </section>

 <!--  GENESIS-->

<div class="container text-center">
    <button  id="genesis">Genesis</button>
    
</div>
    
    
   
 
    
    
         

    
<footer class="fixed-bottom">

       
    <!--  Social Links--> 
    
    

    <div class="row justify-content-center">

        <button id="cookies" class="btnFooter col-4 text-center">
            Cookies
        </button>

        <button id="policy" class="btnFooter col-4 text-center">
            Privacy Policy
        </button>

        <button id="contact" class="btnFooter col-4 text-center">
            Contact Us
        </button>
    </div>
   

    
</footer>
    
    
    <!-- WINBOX GENESIS-->
<div class="hidden">
    <div id="genesis-content">
        <h2 id="boot"><mark>/ booting BlockSwan</mark></h2>
        <div class="row">
                
            <div class="col">
                <p id="loader">(#########)</p>
            </div>

            <div class="col justify-content-end"><p id="percent">100%</p></div>
                
        </div>
            
           <p class="winbox-text" id="mission">> Our mission is to build a platform allowing any individual to access blockchain technology knowledge or digital assets exposure within a transparent protocol and rewarding ecosystem. <br><br>
                Centralized exchanges, blockchain influencers and project’s increase in marketing expenses has nurtured
            blockchain awareness and created convenient ways for investors to access numerical goods by means of
            important advances in the interaction and manipulation of digital assets – commonly expressed to end-users
            as “crypto.” If the success of these platform has meant that investors are perceiving true opportunities
            in a risky and emergent market, it has also produced several challenges for the industry. These include: <br>
            <br><br><mark>Too Many Barriers</mark><br><br>
            > Investors are increasingly having a hard time staying up to date with news, talking with involved
            experts, or simply keeping track of their assets within the ecosystem of multiple hardware
            wallet/blockchain addresses. Thus, even if they desire, investor can prevent themselves to access
            blockchain exposure.
            <br><br><mark>Lack of knowledge</mark><br><br>
            > While the crypto market growth is attracting new investors, they reckon having about zero knowledge
            or would call their level of understanding as “emerging”, but apparently that does not prevent
            them to invest, taking more risks often unconsidered.
            <br><br><mark>Missed Opportunities</mark><br><br>
            > As the catalog of digital assets in the market expand thus increasing the number of missed
            opportunities, it has created new opportunities for involved builders, experts, or analysts to be
            rewarded for sharing their expertise or knowledge.   
            </p> 
    </div>
    
</div>


     <!-- WINBOX COOKIES-->
<div class="hidden">
    <div id="cookies-content">
        <h2><mark>/ Cookies</mark></h2>
         
        <p class="winbox-text"> <br> Cookies management & policies are being updated. Please make sure to come back really soon!</p> 
    </div>
        
</div>

     <!-- WINBOX PRIVACY POlICY-->
<div class="hidden">
    <div id="policy-content">
        <h2><mark>/ Privacy Policy</mark></h2>
         
        <p class="winbox-text"> <br> We are writing the policies, stay aware !</p>  
               
    
    </div>
        
</div>


<?php

if (isset($_POST['submit'])) {

        $name = $_POST['name'];
        $mailFrom = $_POST['email'];
        $subject = "From the website";
        $message = $_POST['message'];
        
        $mailTo = "contact@blockswan.finance";
        $headers = "From: ".$mailFrom;
        $txt = "We have received an e-mail from ".$name.".\n\n".$message;
        
        mail($mailTo, $subject, $txt, $headers);
   
} ?>
     <!-- WINBOX CONTACT -->

     <div class="hidden">
        <div id="contact-content">
            <h2><mark>/ Contact Us</mark></h2>
           <p class="winbox-text"> <br> Welcome to BlockSwan! You maybe have a question? Feel absolutely free to send us a message via this form. Make sure to join us on <a href="https://discord.gg/ffrzhYEn57">Discord</a> so you never miss another announcement or discussion with the strategists or community!</p> 

            <form action="" method="post">

                <div class="input-group mb-4">
                    <input type="text" name="name" class="form-control" placeholder="Anon" aria-label="Name" aria-describedby="basic-addon1">
                </div>

                
                <div class="input-group mb-4">
                    <input type="email" name="email" class="form-control" placeholder="Email" aria-label="email">
                </div>

                <div class="input-group mb-4">
                    <textarea name="message" class="form-control" aria-label="With textarea" placeholder="gm BlockSwan, I would like to talk about ..."></textarea>
                </div>

                <button class="btn btn-outline-secondary justify-content-center" name="submit" type="submit" id="button-mail">Send !</button>
            
            </form>
            
           
    


        </div>
        
    </div>

    
    
    <script src="JS/binary.js"></script>
    
    <script src="JS/typelib.js"></script>
<script src="JS/terminal.js"></script>

<script src="JS/switch.js"></script>
<script src="JS/typewritter.js"></script>


</body>
</html>