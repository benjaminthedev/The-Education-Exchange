//Main JS
console.log('Welcome to The Education Exchange');

if (!document.getElementsByTagName('body')[0].classList.contains("logged-in")) {
    console.log('Not Logged In AppJS');
}

const addingLO = document.querySelectorAll('body');

addingLO[0].classList.add('logged-out-user');




// const regLinkBBP = document.querySelectorAll('.bbp-lostpass-link');
// console.log(regLinkBBP);

// regLinkBBP[0].innerText = "Log In";
// regLinkBBP[0].href = "https://theeducation.exchange/login/";






/* -- For blog posts
Checks to see if body class list contains single if so then
const changes the text on the bubble
*/
if (document.getElementsByTagName('body')[0].classList.contains("single-post")) {
    const bubbleTextChange = document.getElementById('wpd-bubble-add-message').innerText = "What do you think? Share your reflections.";
    console.log(bubbleTextChange);

    //     const doubleFacebook = document.querySelectorAll('.elementor-share-btn_facebook');
    //     doubleFacebook[1].style.display = "none";
    // 
}








