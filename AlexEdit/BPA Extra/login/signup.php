<?php
    require "header.php";
?>

    <main>
        <h1>Signup</h1>
        <?php
            if (isset($_GET['error'])) {
                if ($_GET['error'] == "emptyfields") {
                    echo '<p>Fill in all Fields</p>';
                } else if ($_GET['error'] == "invaliduidmail") {
                    echo '<p>Invalid Username and e-mail!</p>';
                } else if ($_GET['error'] == "invaliduid") {
                    echo '<p>Invalid Username!</p>';
                } else if ($_GET['error'] == "invalidmail") {
                    echo '<p>Invalid e-mail!</p>';
                } else if ($_GET['error'] == "passwordcheck") {
                    echo "<p>Passwords don't match!</p>";
                } else if ($_GET['error'] == "usertaken") {
                    echo '<p>Username is Taken!</p>';
                }
            } else if ($_GET['signup'] == "success") {
                echo '<p>Signup Successful</p>';
            }
        ?>
        <form action="includes/signup.inc.php" method="POST">
            <input type="text" name="uid" placeholder="Username">
            <input type="text" name="mail" placeholder="Email">
            <input type="password" name="pwd" placeholder="Password">
            <input type="password" name="pwd-repeat" placeholder="Repeat Password">
            <button type="submit" name="signup-submit">Signup</button>
        </form>
    </main>

<?php
    require "footer.php";
?>