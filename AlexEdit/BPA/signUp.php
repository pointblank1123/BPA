<?php
    require "header.php";
?>
    <div class="container">
        <div class="row justify-content-center">
            <h3>Create an account</h3>
        </div>
        <div class="row justify-content-center signupContainer">     
            <form action="POST">
                <input class="signupSheet" type="text" placeholder="First Name" required>
                <input class="signupSheet" type="text" placeholder="Last Name" required><br>
                <input class="signupSheet" type="text" placeholder="Email" size="50" required><br>
                <input class="signupSheet" type="password" placeholder="Password" size="50" required><br>
                <input class="signupSheet" type="password" placeholder="Reenter password" size="50" required><br>
                <button type="submit" class="submitButton signupSheet">Submit</button>
                <br>
            </form>
        </div>
    </div>
<?php
    require "footer.php"
?>