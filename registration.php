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
    
    <form method="POST" action="scripts/register.php" class="container mt-5 mb-5">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-md-6">
                <div class="card px-5 py-5"> <span class="circle"><i class="fa fa-check"></i></span>
                    <h5 class="mt-3">FastNote Registration</h5><br/>
                    
                    <?php if(isset($_SESSION['reg_status'])){ ?> <div class="alert alert-danger" role="alert"> <?php echo $_SESSION['reg_status']; unset($_SESSION['reg_status']); ?> </div> <?php } ?>
                    
                    <div class="form-input"> <i class="fa fa-envelope"></i> <input type="email" class="form-control" placeholder="Email address" name="email" required> </div><br>
                    <div class="form-input"> <i class="fa fa-user"></i> <input type="text" class="form-control" placeholder="Username" name="username" required> </div><br>
                    <div class="form-input"> <i class="fa fa-lock"></i> <input type="text" class="form-control" placeholder="password" name="password" required> </div><br>
                    <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"  required> <label class="form-check-label" for="flexCheckChecked"> I agree with all the statements </label> </div> 
                    
                    <button type="submit"  class="btn btn-primary mt-4 signup">Registration</button>

                    <div class="text-center mt-3"> <span>Or continue with these social profile (Future update)</span> </div>
                    <div class="d-flex justify-content-center mt-4"> <span class="social"><i class="fa fa-google"></i></span> <span class="social"><i class="fa fa-facebook"></i></span> <span class="social"><i class="fa fa-twitter"></i></span> <span class="social"><i class="fa fa-linkedin"></i></span> </div>
                    <div class="text-center mt-4"> <span>Log in?</span> <a href="index.php" class="text-decoration-none">Log In</a> </div>
                
                </div>
            </div>
        </div>
    </form>

</body>
</html>
