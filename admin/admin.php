<?php realpath('index.php'); 

include ("../php/dbconnect.php");
include ("addUser.php");
include ("../php/priceLoader.php");
include ("backend.php");
include ("addTxUser.php");
include ("addTerm.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>BlockSwan</title>
    <!-- JQUERY -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../node_modules/go-binary/src/jquery.go-binary.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" 
    content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="Description" content="A platform allowing any individual to access
    blockchain technology knowledge or digital assets exposure within a
    transparent protocol and rewarding ecosystem." >
  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/fonts.css">
    <link rel="stylesheet" href="../CSS/media.css">
    <link rel="icon" href="../assets/BSWN.png">


   
    
   
</head>
<body>

<div class="container">
    <div class="row">

    <!--  ADD USER   --> 
        <div class="col-lg-6 col-sm-12">

            <h2 class="text-center">Add User Account</h2>
            <form action="" method="post">

                <div class="input-group mb-4">
                    <input type="text" name="pseudo" class="form-control" placeholder="User Pseudo" aria-label="Name" aria-describedby="basic-addon1">
                </div>


                <div class="input-group mb-4">
                    <input id="mail" type="email" name="email" class="form-control" placeholder="email" aria-label="email">
                </div>

                <button class="btn btn-outline-secondary justify-content-center" name="addUser" type="submit" id="button-mail">Add User to database !</button>
                <p class="text-center"><?php if(isset($msgAddUser)){ echo $msgAddUser;} ?></p>
            </form>
        
        </div>
        




        <!--  ADD TRANSACTION USER   --> 
        <div class="col-lg-6 col-sm-12">
                <br><br>
            <h2 class="text-center"><p>Add Transaction User</p></h2>

            <form action="" method="post" class="text-center">
                    <label for="user"><p> PUBLIC KEY</p></label>
                    <input list="users" name="publicKey" id="publicKey">
                    <datalist id="users">
                    
                        <?php $requete = $db->query("SELECT publicKey FROM user");
                        while ($resultat = $requete->fetch())
                        { ?>
                        <option value=<?php echo $resultat['publicKey'];?>></option>";
                        <?php }  ?>
                    </datalist>

                <div class="row">

                    <label for="userTx"><p> CHOOSE ASSET</p></label>
                        <input list="usersTx" name="assetUserTx" id="userTx">
                        <datalist id="usersTx">
                        
                            <?php $requete = $db->query("SELECT ticker FROM asset");
                            while ($resultat = $requete->fetch())
                            { ?>
                            <option value=<?php echo $resultat['ticker'];?>></option>";
                            <?php }  ?>
                        </datalist>
                
                </div>

                <div class="row">
                        <p>Amount</p>                 
                        <input type="text" name="amount" class="form-control" placeholder="0.00" aria-label="amount" aria-describedby="basic-addon1">
                    </div>




               <div class="row d-flex">

               
                        <p class="text-center">iBSWN price</p>
                            <div class="col-6">
                            <p><?php echo "$".$iBSWNprice;?></p>
                            </div>

                            <div class="col-6">
                            <p>iBSWN VALUE</p>
                            
                            </div>

               </div>

                <div class="row d-flex">
                    <div class="col-6">
                        <button class="btn btn-outline-secondary justify-content-center" name="UserDeposit" type="submit" id="button-deposit">DEPOSIT</button>
                    </div>
                    <div class="col-6">
                        <button class="btn btn-outline-secondary justify-content-center" name="UserWithdraw" type="submit" id="button-withdraw">WITHDRAW</button>
                    </div>
                </div>
                <p class="text-center"><?php if(isset($msgAddTxUser)){ echo $msgAddTxUser;} ?></p>

            </form>
        
        </div>







    </div>

</div>


<!-- ADD A TERM DESCSRIPTIOON -->

<div class="container">
    <div class="row">
        
    <h2 class="text-center">Add TERM DESCRIPTION</h2>
            <form action="" method="post">

                <div class="input-group mb-4">
                    <input type="text" name="term" class="form-control" placeholder="What term is it ?" aria-label="term" aria-describedby="basic-addon1">
                </div>


                <div class="input-group mb-4">
                    <input id="mail" type="text" name="termDescription" class="form-control" placeholder="what does it mean ?" aria-label="termDescription">
                </div>

                <button class="btn btn-outline-secondary justify-content-center" name="addTerm" type="submit" id="button-term">Add term & description to database !</button>
                <p class="text-center"><?php if(isset($msgAddTerm)){ echo $msgAddTerm;} ?></p>
            </form>



    </div>
</div>






<form action="../php/priceLoader.php" method="post">
    <input type="submit" name="someAction" value="UPDTADE PRICE"/>
</form>


<script src="https://cdn.ilo.so/embed.js" async></script>
<script src="../JS/binary.js"></script>
<script src="../JS/typelib.js"></script>
<script src="../JS/switch.js"></script>
<script src="../JS/typewritter.js"></script>
<script src="../JS/terminal.js"></script>
<script src="../JS/price.js"></script>
</body>
</html>