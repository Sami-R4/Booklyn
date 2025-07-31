<?php
session_start();
include("dbconfig.php");

// Data sanitization
function filterData($value) {
    return stripslashes(htmlspecialchars(trim($value)));
}

if(isset($_POST['login'])){
    $email = filterData($_POST['loginEmail']);
    $pwd = filterData($_POST['loginPassword']);

    // Checking if user exists
    $sql = "SELECT * FROM `users` WHERE email='$email' LIMIT 1";
    $result = mysqli_query($conn, $sql);

    if($result && mysqli_num_rows($result) === 1){
        $user = mysqli_fetch_assoc($result);
        $pwdlog = $user['password'];

        // Verifying Pwd
        if(password_verify($pwd, $pwdlog)){
            // setting session variables
            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['user_type'] = $user['user_type'];
            $_SESSION['username'] = $user['username'];

            // Redirecting based on user type
            if($user['user_type'] === 'user'){
                header("Location: ../pages/user/home.php");
            }elseif($user['user_type'] === 'library'){
                header("Location: ../pages/library/dashbook.php");
            }else{
                $_SESSION['error'] = 'Unknown user type.';
                header("Location: ../pages/index.php");
                exit();
            }
        }
    }
}

?>
