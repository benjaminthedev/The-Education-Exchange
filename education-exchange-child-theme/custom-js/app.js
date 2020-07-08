//Main JS
console.log('Welcome to The Education Exchange');



/* -- For blog posts
Checks to see if body class list contains single if so then
const changes the text on the bubble 
*/
if (document.getElementsByTagName('body')[0].classList.contains("single-post")) {
    const bubbleTextChange = document.getElementById('wpd-bubble-add-message').innerText = "Share your reflections";

    const doubleFacebook = document.querySelectorAll('.elementor-share-btn_facebook');
    doubleFacebook[1].style.display = "none";
}

//BBpress text change
if (document.getElementsByTagName('body')[0].classList.contains("bbpress")) {
    const bbPressWarnTextChange = document.querySelectorAll('.bbp-template-notice ul li');
    bbPressWarnTextChange[1].innerText = "There are no posts here yet. Be the first to connect!"
}

// BBpress forums text changes

const forumTitle = document.querySelectorAll('.li.bbp-forum-info');

console.log(forumTitle);






