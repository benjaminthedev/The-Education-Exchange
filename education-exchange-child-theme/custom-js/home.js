//If logged in show this text 
const bodyCheck = document.getElementsByTagName('body')[0];

if (bodyCheck.classList.contains("logged-in")) {
    const areYouLoggedIn = document.querySelector('.standardBtn').innerText = "Visit Your Account";
}


if (!bodyCheck.classList.contains("logged-in")) {
    const redirect = document.querySelectorAll('.standardBtn');
    redirect[0].href = "/register/"
    console.log("not logged in");

}

