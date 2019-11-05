<?php
if(isset($_POST['signUpSubmit'])){
    require 'connection.php';
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $confirmPass = $_POST['passConfirm'];

    if(empty($fname) || empty($lname) || empty($email) || empty($password) || empty($confirmPass)){ // are any fields empty
        header("Location: ../signup/signup.php?error=emptyfield");
        exit();
    }elseif(!preg_match("/^[a-zA-Z0-9@a-zA-Z0-9.]*$/", $email)){ // is this a valid email
        header("Location: signup.php?error=invalidusername");
        exit(); 
    }
    elseif($password !== $confirmPass){ // do password and confirm password match
        header("Location: signUp.php?error=passnotmatch");
        exit();
    }else{ // does this email already exist
        $sql = "SELECT UserEmail FROM userinfo WHERE UserEmail=?";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../signUp.php?error=sqlerror1");
            exit();
        }else{
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if($resultCheck !== 0){
                header("Location ../signUp.php?error=emailtaken");
                exit();
            }else{
                $sql = "INSERT INTO userinfo(fname, lname, UserEmail, Pwd) VALUES (?,?,?,?);";
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt, $sql)){
                    header("Location: ../signUp.php?error=sqlerror2");
                    exit();
                }else{
                    $hashedPwd = password_hash($password, PASSWORD_DEFAULT); //for hashed password

                    mysqli_stmt_bind_param($stmt, "ssss", $fname, $lname, $email, $hashedPwd); // replace $password w/ $hashedPwd for hashed password
                    mysqli_stmt_execute($stmt);
                    header("Location: ../index.php?success=signupsuccess");
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
else{
    header("Location: ../signUp.php");
    exit();
}
