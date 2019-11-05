<?php
   session_start();
   if(isset($_SESSION['Id'])==false){
       require 'header.php';
   }
   elseif(isset($_SESSION['Id'])==true){
       require 'LoggedHeader.php';
   }

?>

    <div class="parallax">
    </div>
    <!--
    <div class="container-fluid">
        <div class="row separator">
        </div>
    </div>
    -->

    <div class="text-center head-title">
        <h1>Welcome to EPIC WIN Sporting Goods!</h1>
    </div>
    <!--
    <div class="container-fluid">
        <div class="row separator">
        </div>
    </div>
    -->

    <main>
        <div class="intro-image">
            <div class="intro-image-border">
                <div class="intro-image-bg">
                    <h1 class="mission-statement-text">The Biggest Brands In Sports</h1>
                </div>
            </div>
        </div>

        <hr class="seperator">
        
        <div class="directoryContainer">
            <div class="row">
                <div class="col-md-4 directoryImg">
                    <img src="images/baseball1.2.jpg" alt="">
                    <a href="shop.php"><h3 class="text-center catalog-text">Equipment</h3></a>
                </div>
                <div class="col-md-4 directoryImg">
                    <img src="images/shoes1.2.jpg" alt="">
                    <a href="shop.php"><h3 class="text-center catalog-text">Shoes</h3></a>
                </div>
                <div class="col-md-4 directoryImg">
                    <img src="images/clothes1.2.jpg" alt="">
                    <a href="shop.php"><h3 class="text-center catalog-text">Apparel</h3></a>
                </div>
            </div>
        </div>
    </main>

    <hr class="seperator">
    

<?php
    require "footer.php";
?>