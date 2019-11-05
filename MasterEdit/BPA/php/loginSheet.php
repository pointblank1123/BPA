<?php
session_start();
if(isset($_POST['login'])){
    require 'connection.php';
    $password=$_POST['userPwd'];
    $email=$_POST['userEmail'];

    if(empty($password) || empty($email)){
        header("Location: ../index.php?error=emptyfield");
        exit(); 
    }
    else{
        $sql = "SELECT * FROM userinfo WHERE UserEmail=?";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("Location: ../index.php?error=sqlerror");
            exit();
        }else{
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            $results = mysqli_stmt_get_result($stmt);
            if($row = mysqli_fetch_assoc($results)){
                $pwdCheck = password_verify($password, $row['pwd']); //for hashed password
                if($password !== $row['Pwd']){
                    header("Location: ../index.php?error=wrongpwd");
                    exit();
                }else if($password == $row['Pwd']){
                    $_SESSION['Id'] = 1;
                    $_SESSION['fname']= $row['fName'];
                    $_SESSION['lname']= $row['lname'];
                    header("Location: ../index.php?loggedIn");
                    exit();
                }else{
                    header("Location: ../login.php?error=wrongpwd");
                    exit();
                }
            }else{
                header("Location: ../login.php?error=nouser");
                exit();
            }
        }
    }
}else{
    header("Location: ../index.php");
    exit();
}

$sql = "SELECT fName FROM userinfo WHERE UserEmail=?";
$stmt = mysqli_stmt_init($conn);
mysqli_stmt_bind_param($stmt, "s", $email);
mysqli_stmt_execute($stmt);
$results = mysqli_stmt_get_result($stmt);
$_SESSION['fname']=$results;