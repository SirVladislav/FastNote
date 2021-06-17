<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>FastNotes</title>
</head>
<body>
    
    <form method="POST" action="/scripts/login.php" class="container mt-5 mb-5" autocomplete="on">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-md-6">
                <div class="card px-5 py-5"> <span class="circle"><i class="fa fa-check"></i></span>
                    <h5 class="mt-3">FastNote Log In</h5><br>
                   
                    <?php if(isset($_SESSION['login_result'])) {
                         echo "<div class='alert alert-warning' role='alert'>".$_SESSION['login_result']. " </div>"; 
                         unset($_SESSION['login_result']);
                    }?>
                   
                    <div class="form-input"> <i class="fa fa-envelope"></i> <input name="username" type="text" class="form-control" placeholder="username" required> </div><br>
                    <div class="form-input"> <i class="fa fa-lock"></i> <input type="text" name="password" class="form-control" placeholder="password" required> </div>
                    <button type="submit" class="btn btn-primary mt-4 signup">Log In</button>
                    <div class="text-center mt-3"> <span>Or continue with these social profile (Future update)</span> </div>
                    <div class="text-center mt-4"> <span>No acc?</span> <a href="registration.php" class="text-decoration-none">Register</a> </div>
                </div>
            </div>
        </div>
    </form>

</body>
</html>