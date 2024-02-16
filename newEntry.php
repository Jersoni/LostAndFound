<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lost n Found</title>
    <!-- <link rel="stylesheet" href="../lostandfound/css/newEntry.css"> -->
    <link rel="stylesheet" href="./src/output.css">
</head>
<body>
    <nav class="bg-red-800 underline">
        hif
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
        
        <div class="new-entry-container">
            <h3 class="new-entry-header">NEW ENTRY</h3>

            <span class="post-type-label">Post Type</span>
            <div class="post-type-button-container">
                <button class="lost-button" value="lost">Lost</button>
                <button class="found-button" value="found">Found</button>
            </div>

            <!-- LOST -->

            <form action="../lostandfound/database/newEntryDatabase.php" method="post" class="new-entry-form-lost">

                <label for="owner-name">Owner Name</label>
                <input name="owner-name" type="text" id="owner-name">

                

                <label for=lost-description">Item Description</label>
                <input name="lost-description" type="text" id=lost-description">
    
                <label for="lost-location">Location Lost</label>
                <input name="lost-location" type="text" id="lost-location">

                <label for="lost-date">Date Lost</label>
                <input name="lost-date" type="date" id="lost-date">

                <button type="submit" name="submit" class="new-entry-submit-button">Submit</button>
            </form>

            <!-- FOUND -->

            <form action="../lostandfound/database/newEntryDatabase.php" method="post" enctype="multipart/form-data" class="new-entry-form-found">

                <label for="finder-name">Finder Name</label>
                <input name="finder-name" type="text" id="finder-name">
    
                <label for="found-description">Item Description</label>
                <input name="found-description" type="text" id="found-description">
    
                <label for="found-location">Location Found</label>
                <input name="found-location" type="text" id="found-location">

                <label for="found-date">Date Found</label>
                <input name="found-date" type="date" id="found-date">

                <label for="image">Upload Image</label>
                <div class="upload-image">
                    <img src="assets/camera.svg">
                    <input name="image" id="image" type="file" accept="image/*" capture>
                </div>

                <button type="submit" name="submit" class="new-entry-submit-button">Submit</button>
            </form>
            
        </div>
        
    </main>

    <script src="../lostandfound/javascript/newEntry.js"></script>
</body>
</html>