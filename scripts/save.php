<?php 
    session_start();
    require_once "connect.php";
 
    if(isset($_POST['button_save'])) {
        
        if(isset($_POST['title']) && isset($_SESSION['username'])){

            $username = $_SESSION['username'];
            $title = $_POST['title'];
            $text = $_POST['text'];
            
            if(isset($_POST['id'])){ 
                $id=$_POST['id'];
                $query = "UPDATE `notes` SET `title` = '$title', `text` = '$text' WHERE `notes`.`id` = '$id'";
            }else {
                $query = "INSERT INTO `notes` VALUES (NULL,'$username', '$title', '$text')";
            }
            
            $result = mysqli_query($connection, $query);
            
            header("location: ../userpage.php");
            exit;
        }

    } elseif(isset($_POST['button_delete'])) {
        
        if(isset($_POST['title']) && isset($_POST['text']) && isset($_SESSION['username'])){

            $id=$_POST['id'];
            $query = "DELETE FROM `notes` WHERE id='$id'";
            $result = mysqli_query($connection, $query);
            
            header("location: ../userpage.php");
            exit;
        }
    }
?>