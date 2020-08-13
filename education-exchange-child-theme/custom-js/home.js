//If logged in show this text
const bodyCheck = document.getElementsByTagName('body')[0];

if (bodyCheck.classList.contains("logged-in")) {
    const areYouLoggedIn = document.querySelectorAll('.standardBtn-New  ');
    areYouLoggedIn[0].innerText = "Visit Your Account";
    console.log(areYouLoggedIn);
    console.log('User Logged In');
}


if (!bodyCheck.classList.contains("logged-in")) {
    const redirect = document.querySelectorAll('.standardBtn');
    redirect[0].href = "/register/"
    console.log("not logged in");

}

