<?php
    require "header.php";
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
        <div class="text-center carousel">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="d-block w-100" src="images/stockphoto.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="images/stockphoto.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="images/stockphoto.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>

        </div>

        <div class="container-fluid">
            <div class="row separator"></div>
        </div>
        
        <div class="directoryContainer">
            <div class="row">
                <div class="col directoryImg"><img src="images/stockphoto.jpg" alt="">
                    <h3 class="text-center">Filler</h3>
                </div>
                <div class="col directoryImg"><img src="images/stockphoto.jpg" alt="">
                    <h3 class="text-center">Filler</h3>
                </div>
                <div class="col directoryImg"><img src="images/stockphoto.jpg" alt="">
                    <h3 class="text-center">Filler</h3>
                </div>
            </div>
        </div>
    </main>
    

<?php
    require "footer.php";
?>