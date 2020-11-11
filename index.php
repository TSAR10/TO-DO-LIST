<?php
    if(array_key_exists('signin',$_POST)){

        $mail = $_POST['mail'];
        $pass = $_POST['password'];

        require 'data.php';

        $profile = get_profiles();

        $i = 0;

        foreach ($profile as $key) {
            if($key['e-mail'] == $mail)
            {
                $i=+1;
                echo '<script>alert("E-MAIL ALREADY EXISTS \n Login to your account")</script>';
            }
        }
        if($i == 0){
            $newprofile = [
                'e-mail' => $mail,
                'password' => $pass,
            ];

            $profile[] = $newprofile;

            $json = json_encode($profile, JSON_PRETTY_PRINT);
            file_put_contents('data.json',$json);


        }
        header('location:index.php');
    }
    elseif (array_key_exists('login',$_POST)) {
        $mail = $_POST['mail'];
        $pass = $_POST['password'];

        require 'data.php';

        $profile = get_profiles();

        $i = 0;

        foreach ($profile as $key) {
            if($key['e-mail'] == $mail)
            {
                $i=+1;
                if($key['password'] == $pass)
                {

                    $int = strcspn($mail,"@");
                    $usrID = substr($mail,0,$int);
                    setcookie(userID,$usrID,0);
                    header('location:home.php');

                }
                else
                {
                    echo'<script>alert("THE CREDENTIALS ARE WRONG")</script>';
                }
            }
        }
        if($i == 0){

            echo'<script>alert("THE CREDENTIALS ARE WRONG")</script>';
        }
    }
?>

<!doctype html>
<html>
<head>
    <title>Log-in Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="log-in.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <script src = "logIn.js"></script>
</head>
<body>
    <header>
        <h1>TO-DO-LIST</h1>
    </header>
    <main>
        <h2>Log In</h2>
        <div>
            <form id = 'log' action="/index.php" method="post">
                <p>
                    <label id = 'label' for = "E-mail">Email</label>
                    <input name = 'mail' type = "email" id = "E-mail" required>
                </p>
                <p>
                    <label id = 'label' for = "Pass">Password</label>
                    <input name = 'password' type = "password" id = "Pass" required>
                </p>
                <p id = 'summit'>
                    <input  type = "submit" name="login" value="Login" onclick="return check()">
                </p>
                <hr id = 'first'>
                <p id = 'summit'>
                    <input  type = "button" value="Signin" onclick="location.href='signin.php'">
                </p>
                <p id = 'summit'>
                    <input  type = "button" value="Google" onclick="location.href=''">
                    <input  type = "button" value="Facebook" onclick="location.href=''">
                </p>
            </form>
        </div>
    </main>
</body>
</html>
