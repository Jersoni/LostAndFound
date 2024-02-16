<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        .nav-container {
            display: flex;
            flex-direction: column;
        }
        .nav-link {
            display: inline-flex;
            border-radius: 9999px;
            padding: 10px;
        }
        .nav-link > img {
            width: 22px;
            height: 22px;
            margin-left: 5px;
            margin-right: 15px;
            opacity: 90%;
        }
        .nav-link:hover {
            background-color: rgba(0, 0, 0, .06);
        }
    }
    </style>
</head>
<body>
    <nav class="nav-container !min-w-64 !max-w-64 !px-3 !py-2 h-screen">
        <div class="flex p-0 items-center !text-center mb-10">
            <img class=" cursor-pointer h-5 !ml-5 !mt-2" src="assets/menu.png" id="menu-btn">
            <span class=" cursor-default nav-text nav-header pl-7 text-2xl pt-[7px] font-semibold">Findly</span class="menu-header">
        </div>

        <a class="nav-item nav-link found-container" href="home.php">
            <img class="!h-7 !w-7 !ml-1" src="assets/found-items.svg">
            <span class="nav-text found-text pt-[1px]">Found Items</span>
        </a>
        
        <a class="nav-item nav-link lost-container pb-1" href="lostItemsPage.php">
            <img class="!h-6 !w-6 !ml-1" src="assets/lost-items.svg">
            <span class="nav-text lost-text" href="lostItemsPage.php">Lost Items</span>
        </a>

        <div class="border border-black border-opacity-10 my-2"></div>

        <a class="nav-item nav-link about-container pb-1" href="aboutUsPage.php">
            <img class="!h-6 !w-6" src="assets/info.svg">
            <span class="nav-text about-text">About Us</span>
        </a>

        <a class="nav-item nav-link" href="contactUsPage.php">
            <img class="!h-6 !w-6" src="assets/at-sign.svg">
            <span class="nav-text contact-text mb-1">Contact Us</span>
        </a>
    </nav>

    <script src="../lostandfound/javascript/nav.js"></script>
</body>
</html>