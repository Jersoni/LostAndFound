<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lost n Found</title>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/newEntry.css">
</head>
<body>

    <nav>
        <div class="nav-item nav-header-container">
            <img src="assets/menu.jpg" style="height: 20px;">
            <span class="nav-text nav-header">Jersey</span class="menu-header">
        </div>

        <div class="nav-item found-container">
            <img src="assets/found.png">
            <span class="nav-text found-text">Found Items</span>
        </div>
        
        <div class="nav-item lost-container">
            <img src="assets/lost.svg">
            <span class="nav-text lost-text">Lost Items</span>
        </div>

        <hr>

        <div class="nav-item about-container">
            <img src="assets/about.svg">
            <span class="nav-text about-text">About Us</span>
        </div>

        <div class="nav-item contact-container">
            <img src="assets/contact.svg">
            <span class="nav-text contact-text">Contact Us</span>
        </div>
    </nav>

    <main>

        <!-- FOUND CONTAINER -->
        <div class="main-container">

            <div class="search-container">

                <form id="search-form" class="search-bar">
                    <input class="search-text search-bar-text" type="search" id="search-input" placeholder="Search" autocomplete="off">
                    <button type="submit" class="search-button">
                        <img src="assets/search.svg">
                    </button>
                </form>

                <div class="new-entry">
                    <img src="assets/new-entry.svg">
                    <span class="search-text new-entry-text">New Entry</span>
                </div>
            </div>

            <div class="found-content-container">

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

        <!-- NEW ENTRY PAGE -->

        <script src="../lostandfound/javascript/homePage.js"></script>
    </main>
</body>
</html>