console.log('forums JS Loaded');

//BBpress text change
if (document.getElementsByTagName('body')[0].classList.contains("bbpress")) {
    const bbPressWarnTextChange = document.querySelectorAll('.bbp-template-notice ul li');
    // bbPressWarnTextChange[1].innerText = "There are no posts here yet. Be the first to connect!";
    bbPressWarnTextChange[1].innerText = "Be the first to contribute!";


}





// BBpress forums text changes

const forumTitle = document.querySelectorAll('.li.bbp-forum-info');
console.log(forumTitle);
