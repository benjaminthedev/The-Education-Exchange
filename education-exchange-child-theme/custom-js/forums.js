console.log('Forums JS Loaded');

const accountLinkClicked = document.querySelectorAll('.bbp-author-link');

accountLinkClicked.forEach(function (link) {
    link.addEventListener('click', event => {
        link.href = "/my-account/";
    });
});

// BBpress forums text changes
const forumTitle = document.querySelectorAll('.li.bbp-forum-info');
console.log(forumTitle);

//BBpress text change
if (document.getElementsByTagName('body')[0].classList.contains("bbpress")) {
    const bbPressWarnTextChange = document.querySelectorAll('.bbp-template-notice ul li');
    // bbPressWarnTextChange[1].innerText = "There are no posts here yet. Be the first to connect!";
    bbPressWarnTextChange[1].innerText = "Be the first to contribute!";
}