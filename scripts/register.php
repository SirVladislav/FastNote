<?php 
    session_start();
    require_once "connect.php";

    if(isset($_POST['username'], $_POST['email'], $_POST['password'])) {
                    
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "INSERT INTO users VALUE ('$username','$email','$password')";
        $result = mysqli_query($connection, $query);

        if($result){
            $_SESSION['email'] = $email;
            $_SESSION['username'] = $username;
            header("location: ../userpage.php");
            exit;
        }

    }
    
    $_SESSION['reg_status'] = "User alredy registered";
    
    header("location: ../registration.php");
?>