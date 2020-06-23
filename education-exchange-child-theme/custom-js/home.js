console.log('Home Page JS Loaded');

//If logged in show this text 

const bodyCheck = document.getElementsByTagName('body')[0];
// const bodyCheck = document.querySelector('.home');

console.log(bodyCheck);


console.log('new');


if (bodyCheck.classList.contains("logged-in")) {
    console.log('true');
    const areYouLoggedIn = document.querySelector('.standardBtn').innerText = "Visit Your Account";
}