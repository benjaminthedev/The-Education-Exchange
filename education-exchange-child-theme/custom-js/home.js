//If logged in show this text 
const bodyCheck = document.getElementsByTagName('body')[0];

if (bodyCheck.classList.contains("logged-in")) {
    const areYouLoggedIn = document.querySelector('.standardBtn').innerText = "Visit Your Account";
}