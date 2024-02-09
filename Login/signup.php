<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="../css/signup.css">
    <link rel="stylesheet" href="../css/loginContainer.css">
</head>
<body>
    <main>
        <h1 class="signup-header">Create an Account</h1>

        <form action="../database/signupDatabase.php" method="post" >
            <label for="username">Username</label>
            <input type="text" name="username" id="username" class="username">

            <label for="email">Email</label>
            <input type="text" name="email" id="email" class="email">

            <label for="password">Password</label>
            <input type="text" name="password" id="password" class="password">

            <input type="submit" name="submit" value="submit" class="signup-submit-button">
        </form>
    </main>
</body>
</html>