<?php
    require "header.php";
?>
    <div class="container">
        <div class="row justify-content-center">
            <h3>Create an account</h3>
        </div>
        <div class="row justify-content-center signupContainer">     
            <form action="php/signupSheet.php" method="POST">
                <input class="signupSheet" type="text" placeholder="First Name" name="fname" required>
                <input class="signupSheet" type="text" placeholder="Last Name" name="lname" required><br>
                <input class="signupSheet" type="text" placeholder="Email" size="50" name="email" required><br>
                <input class="signupSheet" type="password" placeholder="Password" size="50" name="pass" required><br>
                <input class="signupSheet" type="password" placeholder="Reenter password" size="50" name="passConfirm" required><br>
                <button type="submit" class="submitButton signupSheet" name="signUpSubmit" value="Sign Up">Submit</button>
                <br>
            </form>
        </div>
    </div>
<?php
    require "footer.php"
?>