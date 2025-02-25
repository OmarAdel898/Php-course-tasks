<?php

    $username = "mohamed";
    $password = "123";
    $success=true;
    if (isset($_POST['register'])) {
        $regUsername = $_POST['reg_username'];
        $regEmail = $_POST['reg_email'];
        $regPassword = $_POST['reg_password'];
        if ($success) {
            header("Location: http://localhost/Php-course-tasks/Task%201/login.php");
            die();
        }
    }
    ?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
      <div class="container p-5">
            <div class="h-100 my-5 bg-light py-4 rounded-5">
                <div class="h-25 d-block  w-100">
                    <p class="text-danger text-center h2">
                        <?php if (!$success): ?>Incorrect credentials, please try again<?php endif;
                        ?> 
                        &nbsp;
                    </p>
                
                </div>
                <h2 class="text-center my-5">Register</h2>
                <form method="POST" class=" d-flex w-50 my-auto mx-auto flex-column justify-content-center align-items-center gap-0">
                <input class="form-control w-50 my-2" type="text" name="reg_username" placeholder="Username" required>
                <input class="form-control w-50 my-2" type="email" name="reg_email" placeholder="Email" required>
                <input class="form-control w-50 my-2" type="password" name="reg_password" placeholder="Password" required>
    
                    <div class="mb-4 mt-1 w-50">
                        <p class="mb-1 text-center">Already have account ? <a href="login.php">Log in</a></p>
                    </div>
                    <button class="btn btn-info w-25" type="submit" name="register">Register</button>
                </form>

                </div>
        </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>