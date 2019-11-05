<?php
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="icon" type="png" href="images/EW2.png" />
    <link href="https://fonts.googleapis.com/css?family=Archivo+Black&display=swap" rel="stylesheet">
    <title>EPIC WIN | Home Page</title>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark" style="background-color: #41A0CC;" >
        <!-- Brand -->
        <a class="navbar-brand" href="#"><img src="images/Epic Win2.png" alt="" style="width:100px;"></a>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="shop.php">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="findUs.php">Find Us</a>
                </li>
            </ul>
        </div>
        <hr>
        <div>
        <ul class="nav navbar-nav navbar-right">
                <li class="nav-item"><p class="navbar-brand"><?php echo "Welcome ". $_SESSION['fname'] ?></p></li>
                <li class="nav-item">
                    <a class="nav-link" href="accountPage.php">My Account</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="php/logout.php">Log Out</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="row d-flex justify-content-center searchContainer">
        <form action="">
            <input type="text" class="searchBar" placeholder="Search" size="100%">
            <Button type="submit" class="btn"><i class="fas fa-search searchIcon"></i></button>
        </form>
    </div>