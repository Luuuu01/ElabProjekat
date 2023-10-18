<?php

    require "dbroke.php";
    require "model/user.php";

    session_start();
    if(isset($_POST['username']) && isset($_POST['password']))
    {
        $usernameFroma = $_POST['username'];
        $passwordForma = $_POST['password'];
        $idForma = 1;

        $user = new User($idForma,$usernameFroma,$passwordForma);

        $result = User::logInUser($user,$conn);

        echo json_encode($result->num_rows);
        echo json_encode($_POST['username']);
        echo json_encode($_POST['password']);

        if($result->num_rows == 1){
            $_SESSION['user_id'] = $idForma;
            header('Location: home.php');
            exit();
        }
        else{
            echo "Neuspesno logovanje";
        }
    }

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>FON: Zakazivanje kolokvijuma</title>

</head>
<body>
    <div class="login-form">
        <div class="main-div">
            <form method="POST" action="#">
                <div class="container">
                    <label class="username">Korisnicko ime</label>
                    <input type="text" name="username" class="form-control"  required>
                    <br>
                    <label for="password">Lozinka</label>
                    <input type="password" name="password" class="form-control" required>
                    <button type="submit" class="btn btn-primary" name="submit">Prijavi se</button>
                </div>

            </form>
        </div>

        
    </div>
</body>
</html>