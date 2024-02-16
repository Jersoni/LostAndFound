<?php 
    require_once 'controllerUserData.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Findly</title>

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

        input[type="search"]::-webkit-search-decoration,
        input[type="search"]::-webkit-search-cancel-button,
        input[type="search"]::-webkit-search-results-button,
        input[type="search"]::-webkit-search-results-decoration {
            -webkit-appearance:none;
        }

        .found-items-container {
            grid-template-rows: min-content;
        }

        .item-container {
            overflow: hidden;
            height: fit-content;
            cursor: pointer;
            height: 350px;
        }

        .item-container > .item-image-container  {
            aspect-ratio: 1 / 1.05;
            border: 1px solid rgba(0, 0, 0, .5);
            border-radius: 10px;
            background: #eaeaea;
            overflow: hidden;
        }

        .item-image {
            height: 100%;
            width: 100%;
            object-fit: cover;
            transition: all 0.3s ease;
        }

        .item-details {
            display: flex;
            flex-direction: column;
            font-size: 17px;
            padding-top: 7px;
        }

        .item-details .item-title {
            font-weight: 600;
            margin-bottom: 2px;
        }

        .item-details span:not(.item-title) {
            color: rgb(60, 60, 60);
            font-size: medium;
        }

        ::-webkit-scrollbar {
            width: 7px;
        }

        ::-webkit-scrollbar-thumb {
            background-color: rgb(227, 227, 227);
            border-radius: 50px;
        }
    }
    </style>

</head>
<body class="flex flex-row">

    <?php include "navBar.php" ?>

    <main class="!p-0 w-full">

        <!-- FOUND CONTAINER -->
        <div class="!p-2 !pt-0 max-w-[800px] mx-auto">
            <div class="search-container mt-3 mb-5 flex-row flex w-full h-9">
                <form class=" mr-5 search-bar flex-row flex relative w-full" id="search-form">
                    <input class=" border-opacity-60 border border-black rounded-full w-full !pl-5 !pr-10 outline-none" type="search" id="search-input" placeholder="Search" autocomplete="off">
                    <button class=" h-full right-0 absolute !rounded-full flex items-center justify-center min-w-fit !min-h-fit mr-4 !bg-opacity-0 opacity-80" type="submit" >
                        <img class="h-4" src="assets/search.svg">
                    </button>
                </form>

                <div class=" items-center transition-all hover:bg-gray-400 border-opacity-60 cursor-pointer hover:bg-opacity-40 font-semibold flex flex-row new-entry border border-black rounded-full min-w-36">
                    <img class=" opacity-80 h-5 ml-3" src="assets/new-entry.svg">
                    <span class=" pb-0.5  cursor-pointer search-text new-entry-text w-full text-center">New Entry</span>
                </div>
            </div>

            <!-- content -->
            <div class=" found-items-container flex-nowrap grid grid-cols-3 gap-3 gap-y-8 h-[calc(100vh-100px)] overflow-auto">

                <div class="item-container">
                    <div class="item-image-container">
                        <img class="item-image" src="assets/item.webp" alt="">
                    </div>
                    <div class="item-details">
                        <span class="item-title">iPhone</span>
                        <span class="item-date">When: February 29, 2024</span>
                        <span class="item-location">Where: Room 37</span>
                    </div>
                </div>

                <div class="item-container">
                    <div class="item-image-container">
                        <img class="item-image" src="assets/item.webp" alt="">
                    </div>
                    <div class="item-details">
                        <span class="item-title">iPhone</span>
                        <span class="item-date">When: February 29, 2024</span>
                        <span class="item-location">Where: Room 37</span>
                    </div>
                </div>

                <div class="item-container">
                    <div class="item-image-container">
                        <img class="item-image" src="assets/item.webp" alt="">
                    </div>
                    <div class="item-details">
                        <span class="item-title">iPhone</span>
                        <span class="item-date">When: February 29, 2024</span>
                        <span class="item-location">Where: Room 37</span>
                    </div>
                </div>
                
                <div class="item-container">
                    <div class="item-image-container">
                        <img class="item-image" src="assets/item.webp" alt="">
                    </div>
                    <div class="item-details">
                        <span class="item-title">iPhone</span>
                        <span class="item-date">When: February 29, 2024</span>
                        <span class="item-location">Where: Room 37</span>
                    </div>
                </div>

                <div class="item-container">
                    <div class="item-image-container">
                        <img class="item-image" src="assets/item.webp" alt="">
                    </div>
                    <div class="item-details">
                        <span class="item-title">iPhone</span>
                        <span class="item-date">When: February 29, 2024</span>
                        <span class="item-location">Where: Room 37</span>
                    </div>
                </div>

            </div>
            
        </div>

        <script src="../lostandfound/javascript/home.js"></script>
        
    </main>
</body>
</html>