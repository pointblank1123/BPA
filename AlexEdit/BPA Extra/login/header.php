<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <title>Login</title>
</head>
<body>

    <header>
        <nav>
            <a href="#">
                <img src="img/westada.png" alt="WestAda">
            </a>

            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">About Me</a></li>
                <li><a href="#">Contact</a></li>
            </ul>

            <div>

            <?php
                if (isset($_SESSION['userId'])) {
                    echo '<form action="includes/logout.inc.php" method="post">
                            <button type="submit" name="logout-submit">Logout</button>
                        </form>';
                }else { 
                    echo '<form action="includes/login.inc.php" method="post">
                            <input class="spacing" type="text" name="mailuid" placeholder="Username/E-mail...">
                            <br>
                            <input class="spacing" type="password" name="pwd" placeholder="Password...">
                            <br>
                            <button class="spacing" type="submit" name="login-submit">Login</button>
                        </form>
                     <br>
                    <a href="signup.php">Sign Up</a>';

                    echo '<form action="includes/logout.inc.php" method="post">
                            <button type="submit" name="logout-submit">Logout</button>
                        </form>';
                }
            ?>
                
                <hr>
                
            </div>

            <h1>Connor H || 5/3/2019 || 4A</h1>
        </nav>
    </header>
    
