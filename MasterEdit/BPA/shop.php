<?php
   session_start();
   if(isset($_SESSION['Id'])==false){
       require 'header.php';
   }
   elseif(isset($_SESSION['Id'])==true){
       require 'LoggedHeader.php';
   }
?>
    <div class="container-fluid d-flex justify-content-center">  
        <div class="row itemsContainer">
            <div class="itemsCol">
                <h1>Equipment</h1>
                <p class="catalog-p">Football</p>
                <p class="catalog-p">Basketball</p>
                <p class="catalog-p">Baseball</p>
                <p class="catalog-p">Tennis</p>
                <p class="catalog-p">Golf</p>
            </div>
            <div class="itemsCol">
                <h1>Shoes</h1>
                <p class="catalog-p">Running</p>
                <p class="catalog-p">Hiking</p>
                <p class="catalog-p">Sneakers</p>
            </div>
            <div class="itemsCol">
                <h1>Apparel</h1>
                <p class="catalog-p">Shirts</p>
                <p class="catalog-p">Hoodies</p>
                <p class="catalog-p">Pants</p>
                <p class="catalog-p">Hats</p>
                <p class="catalog-p">Backpacks</p>
            </div>
        </div>

    </div>
<?php
    require "footer.php"
?>