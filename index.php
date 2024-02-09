<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../lostandfound/css/login.css">
    <link rel="stylesheet" href="../lostandfound/css/loginContainer.css">
</head>
<body>
    <main>
        <h1 class="login-header">Sign in</h1>

        <form action="database/loginDatabase.php" method="post" >
            <label for="username">Username or Email</label>
            <input type="text" name="username" id="username" class="username">

            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="password">

            <i class="show-password">
                <img src="../lostandfound/assets/eye-slash.svg" height="20px">
            </i>

            <a class="forgot-password" href="../lostandfound/login/forgotPassword.php">Forgot password?</a>

            <input type="submit" name="submit" value="Submit" class="login-submit-button">
        </form>

        <div class="create-account-container">
            <span>Don't have an account?</span>
            <a class="create-account" href="../lostandfound/login/signup.php">Create one</a>
        </div>

    </main>
</body>
</html>