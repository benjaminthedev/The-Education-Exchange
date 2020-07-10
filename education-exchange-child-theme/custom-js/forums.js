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

console.log('Author CLicked before');

const accountLinkClicked = document.querySelectorAll('.bbp-author-link');
console.log(accountLinkClicked);





document.querySelectorAll('.bbp-author-link').addEventListener('click', event => {
    //handle click
    alert('Author CLicked');
    window.location.href = "http://www.w3schools.com";
});