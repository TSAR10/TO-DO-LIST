<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log-in Page</title>
    <link href="log-in.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <script src = "logIn.js"></script>
</head>
<body>
    <header>
        <h1 id = "heading">TO-DO-LIST</h1>
    </header>
    <main id = "smain">
        <h2>Sign In</h2>
        <div id = "signin">
            <form id = 'log' action="/index.php" method="post">
                <p>
                    <label id = 'label' for = "E-mail">Email</label>
                    <input name = 'mail' type = "email" id = "E-mail" required>
                </p>
                <p>
                    <label id = 'label' for = "Pass">Password</label>
                    <input name = 'password' type = "password" id = "Pass" required pattern="(?=^.{8,}$)((?=.*\d)(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
                </p>
                <p>
                    <label id = 'label' for = "Cnf">Confirm Password</label>
                    <input name = 'confirm password' type = "password" id = "Cnf" required>
                </p>
                <p id = 'summit'>
                    <input  type = "submit" name = "signin" value="Signin" onclick="return sign_check()">
                </p>
                <hr id = 'first'>
                <p id = 'summit'>
                    <input  type = "button" value="Login" onclick="location.href='index.php'">
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
