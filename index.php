<?php require_once 'controllerUserData.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- <link rel="stylesheet" href="../lostandfound/css/login.css">
    <link rel="stylesheet" href="../lostandfound/css/loginFormContainer.css"> -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    paleBlue: '#477BB8',
                    paleBlue2: '#306099'
                }
            }
        }
    }
    </script>
    <style type="text/tailwindcss">
    @layer utilities {
        .signup-input {
            border-radius: 9999px;
            padding: 0.5rem;
            padding-left: 1.2rem;
            width: 100%;
            margin-bottom: 15px;
            outline: none;
            background-color: rgb(245, 245, 245);
        }

        .signup-input:focus {
            border: 0.05rem solid rgb(49, 74, 132);
        }

        .signup-input::placeholder {
            color: rgba(0, 0, 0, .6);
        }
    }
    </style>
</head>
<body class=" flex min-h-screen items-center">
    <main class="border-2 border-gray-500 p-8 w-96 mx-auto rounded-lg border-opacity-50">
        <h1 class=" text-blue-900 text-3xl font-semibold mb-7">Sign in</h1>

        <form action="index.php" method="post" autocomplete="" >
            <?php
            if(count($errors) > 0){
                ?>
                <div class="flex text-center h-fit p-3 w-full bg-red-200 border rounded-lg mb-5 border-black border-opacity-20">
                    <?php
                    foreach($errors as $showerror){
                        echo $showerror;
                    }
                    ?>
                </div>
                <?php
            }
            ?>
            <div class="form-group">
                <input type="text" class="signup-input border-gray-400 border rounded-full p-2 pl-4 mb-3 w-full text-lg" name="email" id="email" placeholder="Email" required value="<?php echo $email ?>">
            </div>
            <div class="form-group mb-2 flex relative">
                <input type="password" class=" signup-input border-gray-400 border rounded-full p-2 pl-4 pr-10 text-lg w-full" name="password" id="password" placeholder="Password" required>
                <img class=" cursor-pointer flex h-3 absolute top-4 right-4 opacity-70" src="../lostandfound/assets/eye-slash.svg">
            </div>
            <div class=" text-sm mb-4">
                <a class=" text-paleBlue2" href="../lostandfound/login/forgotPassword.php">Forgot password?</a>
            </div>
            <div class="form-group">
                <input type="submit" class=" mb-3 cursor-pointer flex w-full rounded-full p-2 text-lg text-center justify-center transition-all duration-300 bg-paleBlue bg-opacity-70 
                text-opacity-90 text-white border border-black border-opacity-50 hover:bg-paleBlue hover:!text-white" name="login" value="Login">
            </div>
            
            <div class=" flex justify-center text-sm cursor-default"><span class="pr-1">Not yet a member?</span> <a href="./signup.php" class=" text-paleBlue2" >Signup now</a></div>
        </form>

        

    </main>
</body>
</html>