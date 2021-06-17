<?php 
session_start();
require_once 'scripts/load-notes.php';
?>

<!DOCTYPE html>
<html lang="en ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="files/style.css">
    <title>UserPage</title>
</head>
<body>
<nav class="container navbar navbar-light bg-light justify-content-space-between">
  <a class="navbar-brand">Hello, <?php echo $_SESSION['username']; ?></a>
  <a class="navbar-brand">Home page</a>
  <form class="form-inline" action="scripts/logout.php">
    <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Log Out</button>
  </form>
</nav>

<div class="container">
    <div class="notes-list">
        <div class="card">
            <h5 class="card-header">Create Note</h5>
            <div class="card-body">
                <p class="card-text">Нажмите создать заметку. После сохранения все заметки будут отображены ниже</p>
                <a href="create-note.php" class="btn btn-success">Create</a>
            </div>
        </div>

        <?php
        if(isset($_SESSION['notes'])){
        $notes = $_SESSION['notes'];
            foreach($notes as $note){

                if(strlen($note['text']) > 100){
                    $note['text'] = mb_strimwidth($note['text'], 0, 43, "...");
                }

                echo "
                <form action='edit-note.php' method='POST'> 
                <div class='card'> 
                    <h5 class='card-header'>".$note['title']."</h5>
                    <input type='hidden' value='".$note['id']."' name = 'id'>
                    <div class='card-body'>
                        <p class='card-text'>".$note['text']."</p>
                        <button type='submit' class='btn btn-primary'>Open note</a>
                    </div>
                </div>
                </form>
                ";
            }   
        }
        unset($_SESSION['notes']);
        ?>
    </div>
</div>
</body>
</html>