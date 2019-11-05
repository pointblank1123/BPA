<?php
    session_start();
    if(isset($_SESSION['Id'])==false){
        require 'header.php';
    }
    elseif(isset($_SESSION['Id'])==true){
        require 'LoggedHeader.php';
    }
    
?>

    <h1>Find our Stores</h1>
    <iframe src="http://maps.google.com" frameborder="0" width="500" height="500" id="mapFrame"></iframe>
<?php
    require "footer.php";
?>