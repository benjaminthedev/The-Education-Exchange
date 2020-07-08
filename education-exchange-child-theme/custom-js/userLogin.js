console.log('user login JS Loaded');

//Hide The CCO Log In Button when logged in
// if (document.getElementsByTagName('body')[0].classList.contains("logged-in")) {

// }

const CCObtnHide = document.querySelectorAll('.sso');
CCObtnHide[0].style.display = "none";
    //CCObtnHide[0].classList.add = "noShow";