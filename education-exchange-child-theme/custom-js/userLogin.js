//Hide The CCO Log In Button when logged in
if (document.getElementsByTagName('body')[0].classList.contains("logged-in")) {
    window.location.href = "https://theeducation.exchange/my-account/";
    const CCObtnHide = document.querySelectorAll('.sso');
    CCObtnHide[0].style.display = "none";

}



