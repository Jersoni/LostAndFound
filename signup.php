<?php require_once "./controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
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
            border: 1px solid gray;
        }

        .signup-input:not(:last-child) {
            background-color: rgb(245, 245, 245);
        }

        .signup-input:focus {
            border: 0.05rem solid rgb(49, 74, 132);
        }
    }
  </style>
</head>
<body class=" min-h-screen flex flex-column items-center text-lg">
    <main class=" border border-black border-opacity-30 max-w-md mx-auto h-fit p-10 flex flex-col rounded-xl">
        <h1 class="signup-header text-3xl mb-7 font-semibold text-paleBlue2">Create an Account</h1>
        <?php
        if(count($errors) == 1){
            ?>
            <div class=" h-fit w-full bg-red-200 border">
                <?php
                foreach($errors as $showerror){
                    echo $showerror;
                }
                ?>
            </div>
            <?php
        }elseif(count($errors) > 1){
            ?>
            <div class="h-fit w-full bg-red-200 border">
                <?php
                foreach($errors as $showerror){
                    ?>
                    <li><?php echo $showerror; ?></li>
                    <?php
                }
                ?>
            </div>
            <?php
        }
        ?>
        <form class=" " action="./signup.php" method="post">
            <input class=" signup-input border" type="text" name="first-name" id="first-name" placeholder="First Name" required>
            <input class=" signup-input border" type="text" name="last-name" id="last-name" placeholder="Last Name" required>
            <input class=" signup-input border" type="text" name="email" id="email" placeholder="Email" required>
            <input class=" signup-input border" type="password" name="password" id="password" placeholder="Password" required>
            <input class=" signup-input border !mb-7" type="password" name="confirm-password" id="confirm-password" placeholder="Confirm Password" required>
            <input class=" text-white text-opacity-90 border-black border-opacity-50 hover:bg-paleBlue bg-opacity-70 transition-all duration-300 hover:!text-white cursor-pointer signup-input border w-full bg-paleBlue" type="submit" name="signup" value="Sign Up">
        </form>
        <div class=" flex-row flex justify-center w-full text-sm">
            <span class=" pr-2" >Already a member?</span>
            <a class=" text-paleBlue" href="./index.php">Login now</a>
        </div>
    </main>
</body>
</html>