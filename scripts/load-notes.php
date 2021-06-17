<?php
session_start();
require_once 'connect.php';

if(isset($_SESSION['username'])){

    $username = $_SESSION['username'];
    $query = "SELECT * FROM `notes` WHERE username='$username'";

    $result = mysqli_query($connection, $query);
    $count = mysqli_num_rows($result);

    if($count){
        $notes = array();
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $notes[] = $row;
        }
        $_SESSION['notes'] = $notes;
    }

}