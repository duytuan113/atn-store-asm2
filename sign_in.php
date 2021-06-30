

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Transparent Login Form</title>
        <link rel="stylesheet" href="login.css"> 
    <body>
        <form action="sign_in.php" method="POST">
            <div class="Login-box">
                <h1>Login</h1>
                <div class="textbox">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <input type="text" placeholder="Email" name="email" value="" required>
                </div>
                <div class="textbox">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                    <input type="password" placeholder="Password" name="password" value="" required>
                </div>
                <input class="btn" type="submit" name="submit" value="Sign in">
            </div> 
        </form>
    </body>   
    </head>
</html>