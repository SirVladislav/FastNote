<?php 
    session_start();
    require_once "connect.php";
    
    if(isset($_POST['username']) && isset($_POST['password'])){
                    
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";

        $result = mysqli_query($connection, $query);
        $count = mysqli_num_rows($result);

        if($count){
            $result = mysqli_fetch_assoc($result);
            $_SESSION['email'] = $result['email'];
            $_SESSION['username'] = $result['username'];
            header("location: ../userpage.php");
            exit;
        }

    }
    
    $_SESSION['login_result'] = "Check login n pass!";

    header("location: ../index.php");
?>
