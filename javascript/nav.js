let navBarItems = document.querySelectorAll('.nav-link')
let currentPath = window.location.pathname

switch(currentPath) {
    case "/lostandfound/home.php":
        navBarItems[0].classList.add("!bg-black", "!bg-opacity-10")
        break;
    case "/lostandfound/lostItemsPage.php":
        navBarItems[1].classList.add("!bg-black", "!bg-opacity-10")
        break;
    case "/lostandfound/aboutUsPage.php":
        navBarItems[2].classList.add("!bg-black", "!bg-opacity-10")
        break;
    case "/lostandfound/contactUsPage.php":
        navBarItems[3].classList.add("!bg-black", "!bg-opacity-10")
        break;
}

let menuBtn = document.querySelector('#menu-btn')

menuBtn.addEventListener('click', () => {
    console.log("click")
    let navBar = document.querySelector('.nav-container')
    if (navBar.classList.contains("!min-w-64")) {
        navBar.classList.remove("!min-w-64")
        navBar.classList.remove("!max-w-64")
        navBar.classList.add("!min-w-20")
        navBar.classList.add("!max-w-20")
    }
    else if (navBar.classList.contains("!min-w-20")) {
        navBar.classList.add("!min-w-64")
        navBar.classList.add("!max-w-64")
        navBar.classList.remove("!min-w-20")
        navBar.classList.remove("!max-w-20")
    }
    
})