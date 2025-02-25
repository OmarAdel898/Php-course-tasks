<?php

    $username = "mohamed";
    $password = "123";
    $success=true;
    $msgs=['All fields are required','Incorrect User Name','Incorrect current password','New password does not match','Password changed successfully'];
    $msgIndex;
    if (isset($_POST['change_password'])) {
        $current_username=$_POST['current_username'];
        $currentPassword = $_POST['current_password'];
        $newPassword = $_POST['new_password'];
        $confirmPassword = $_POST['confirm_password'];
        if (empty($currentPassword) || empty($newPassword) || empty($confirmPassword)) {
            $success=false;
            $msgIndex=0;
        } elseif ($current_username !== $username) {
            $success=false;
            $msgIndex=1;
        } elseif ($currentPassword !== $password) {
            $success=false;
            $msgIndex=2;
        } elseif ($newPassword !== $confirmPassword) {
            $success=false;
            $msgIndex=3;
        } else {
            $success=false;
            $msgIndex=4;
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
                        <?php if (!$success): echo $msgs[$msgIndex]?><?php endif;
                        ?> 
                        &nbsp;
                    </p>
                
                </div>
                <h2 class="text-center my-5">Change Password</h2>
                <form method="POST" class=" d-flex w-50 my-auto mx-auto flex-column justify-content-center align-items-center gap-0">
                    <input class="form-control w-50 my-2" type="text" name="current_username" placeholder="Username" required>
                    <input  class="form-control w-50 my-2"  type="password" name="current_password" placeholder="Current Password" required>
                    <input  class="form-control w-50 my-2"  type="password" name="new_password" placeholder="New Password" required>
                    <input  class="form-control w-50 my-2"  type="password" name="confirm_password" placeholder="Confirm New Password" required>   
                    <div class="mb-4 mt-1 w-50">
                        <p class="mb-1 text-center">Dont have account? <a href="register.php">Create one</a></p>
                    </div>
                    <button class="btn btn-info w-25" type="submit" name="change_password">Change Password</button>
                </form>

                </div>
        </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>