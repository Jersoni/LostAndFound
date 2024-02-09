// Upload Image
const uploadImageButton = document.querySelector('#image')
document.querySelector('.upload-image').addEventListener('click', () => {
    uploadImageButton.click()
})

const postTypeButtons = document.querySelectorAll('.post-type-button-container > button')

document.querySelector('.new-entry-form-found').style.display = "none"

let lostButton = document.querySelector('.lost-button')
lostButton.style.backgroundColor = "rgb(71, 123, 184)"
lostButton.style.color = "rgb(255, 255, 255)" 
document.querySelector('#lost-date').style.marginBottom = "45px"

postTypeButtons.forEach(button => {
    button.addEventListener('click', () => {
        if (button === postTypeButtons[0]) {
            button.style.backgroundColor = "rgb(71, 123, 184)"
            button.style.color = "rgb(255, 255, 255)" 
            postTypeButtons[1].style.backgroundColor = ""
            postTypeButtons[1].style.color = "" 
            document.querySelector('.new-entry-form-lost').style.display = "flex"
            document.querySelector('.new-entry-form-found').style.display = "none"
        } else {
            button.style.backgroundColor = "rgb(71, 123, 184)"
            button.style.color = "rgb(255, 255, 255)" 
            postTypeButtons[0].style.backgroundColor = ""
            postTypeButtons[0].style.color = "" 
            document.querySelector('.new-entry-form-lost').style.display = "none"
            document.querySelector('.new-entry-form-found').style.display = "flex"
        }
    })
})

const ownerName = document.querySelector('#owner-name')
const lostDescription = document.querySelector('#lost-description')
const lostLocation = document.querySelector('#lost-location')
const lostDate = document.querySelector('#lost-date')

ownerName.addEventListener('blur', () => {
    console.log(ownerName.value)
})    
