//Main JS
console.log('Welcome to The Education Exchange');

//Hide The CCO Log In Button when logged in
if (document.getElementsByTagName('body')[0].classList.contains("logged-in")) {
    const CCObtnHide = document.querySelectorAll('.sso');
    CCObtnHide[0].style.display = "none";
    //CCObtnHide[0].classList.add = "noShow";
}


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

//This is for the submit-link page

// if (document.getElementsByTagName('body')[0].classList.contains("page-id-4621")) {
//     const newTesting = document.querySelectorAll('.acf-checkbox-list li label input');

//     newTesting[0].classList.add('removeCheck');
//     newTesting[7].classList.add('removeCheck');
//     newTesting[14].classList.add('removeCheck');
//     newTesting[21].classList.add('removeCheck');
//     newTesting[28].classList.add('removeCheck');

// }



// BBpress forums text changes

const forumTitle = document.querySelectorAll('.li.bbp-forum-info');

console.log(forumTitle);












//Minutes
const mins = document.querySelectorAll(".minutes");

var totalMinutes = 0;

mins.forEach(min => {
    const convertMins = parseFloat(min.innerHTML);
    totalMinutes = totalMinutes + convertMins;
});

console.log(totalMinutes);

//Hours
const hours = document.querySelectorAll(".hours");

var totalHours = 0;

hours.forEach(hour => {
    const convertHours = parseFloat(hour.innerHTML);
    console.log(`Hours: ${convertHours}`);

    const newMins = convertHours * 60;
    console.log(`new mins: ${newMins}`);

    //  totalHours = totalHours + convertHours;
    totalHours = totalHours + newMins;
});

console.log(`Total Hours ${totalHours}`);

//Then add the lot

const addTotal = totalMinutes + totalHours;
console.log(`This is the total time: ${addTotal}`);

//Then Convert The Lot

function time_convert(addTotal) {
    var hours = Math.floor(addTotal / 60);
    var minutes = addTotal % 60;
    return `${hours} hrs : ${minutes} Minutes`;
}

const headingTotal = document.querySelector(".totalTime");
console.log(headingTotal);

headingTotal.innerText = time_convert(addTotal);

if (addTotal > 1) {
    document.querySelector('.totalHeading').style.display = "block";
    console.log('More than one so should be showing');
}



