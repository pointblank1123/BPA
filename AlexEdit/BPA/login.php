<?php
    require "header.php"
?>
    <div class="container">
        <div class="row justify-content-center">
            <h3>Log In</h3>
        </div>
        <div class="row justify-content-center signupContainer">
            <form action="POST">
                <input class="signupSheet" type="text" placeholder="Email" size="40" required><br>
                <input class="signupSheet" type="password" placeholder="Password" size="40" required><br>
                <button class="signupSheet submitButton" type="submit">Log In</button><br>
            </form>
        </div>
    </div>
<?php
    require "footer.php"
?>