<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
if($email == false){
  header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Code Verification</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    paleBlue: '#477BB8',
                    paleBlue2: '#306099',
                    lightestGray: 'rgb(245, 245, 245)'
                }
            }
        }
    }
    </script>
    <style type="text/tailwindcss">
    @layer utilities {
        .class-here {
            background-color: red;
        }
    }
    </style>
</head>
<body>
    <main class=" flex h-screen items-center">
        <div class="flex items-center border border-black border-opacity-60 w-96 h-fit p-8 rounded-xl mx-auto text-paleBlue2">
            <form class="flex flex-col w-full" action="userotp.php" method="POST" autocomplete="off">
                <h2 class=" text-2xl mb-5 font-semibold text-center">Verify your account</h2>
                <div class=" border-b border-black border-opacity-50 mb-5"></div>
                <?php
                if(isset($_SESSION['info'])){
                    ?>
                    <div class=" border border-black border-opacity-30 rounded-lg p-2 bg-green-100 mb-5 text-black text-center">
                        <?php echo $_SESSION['info']; ?>
                    </div>
                    <?php
                }
                ?>
                <?php
                if(count($errors) > 0){
                    ?>
                    <div class="alert alert-danger text-center">
                        <?php
                        foreach($errors as $showerror){
                            echo $showerror;
                        }
                        ?>
                    </div>
                    <?php
                }
                ?>
                <input class="border-black border p-2 rounded-full mb-4 pl-6 bg-lightestGray" type="number" name="otp" placeholder="Enter verification code" required>
                <input class=" cursor-pointer p-2 bg-paleBlue rounded-full text-white" type="submit" name="confirm" value="Confirm">
            </form>
        </div>
    </main>
    
</body>
</html>