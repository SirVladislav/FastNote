<?php
require_once 'connect.php';

if(isset($_SESSION['username']) && isset($_POST['id'])){
    $id = $_POST['id'];
    $query = "SELECT * FROM `notes` WHERE id='$id'";

    $result = mysqli_query($connection, $query);

    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    $title = $row['title'];
    $text = $row['text'];
}
