<?php
session_start();
require_once 'scripts/get-note-info.php';   

?>

<!DOCTYPE html>
<html lang="en ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="files/style.css">
    <script src="files/myscripts.js"></script>
    <title>UserPage</title>
</head>
<body>
<nav class="container navbar navbar-light bg-light justify-content-space-between">
  <a class="btn btn-primary " href="userpage.php" >Go Home</a>
  <a class="navbar-brand">Create Note</a>
  <form class="form-inline" action="scripts/logout.php">
    <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Log Out</button>
  </form>
</nav>

<div class="container">
    <div class="notes-list">
    <div class="card">
        <form action="scripts/save.php" method="POST">
            <div class="card-title">
            <input class="card-title-input" placeholder="Enter title..." required name="title" value="<?php echo $title;?>">
            </div>
            <div class="card-body">
                <div>
                    <textarea name="text" class="card txtarea"  placeholder="type your note here" id="floatingTextarea2" style="outline: none;"><?php echo $text;?></textarea>
                </div>
                <div class="card-save">
                    <input type='hidden' value='<?php echo $id; ?>' name = 'id'>
                    <input type="submit"  class="btn btn-success"  name="button_save" value="Save">
                    <input type="submit"  class="btn btn-danger"  name="button_delete" value="Delete">
                </div>
            </div>
        </form>
    </div>
    
    </div>
</div>

</body>
</html>