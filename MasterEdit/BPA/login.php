<?php
    require "header.php"
?>
    <div class="container">
        <div class="row justify-content-center">
            <h3>Log In</h3>
        </div>
        <div class="row justify-content-center signupContainer">
            <form action="php/loginSheet.php" method="POST">
                <input class="signupSheet" type="text" placeholder="Email" size="40" name="userEmail" required><br>
                <input class="signupSheet" type="password" placeholder="Password" size="40" name="userPwd" required><br>
                <button class="signupSheet submitButton" type="submit" name="login">Log In</button><br>
            </form>
        </div>
    </div>
<?php
    require "footer.php"
?>