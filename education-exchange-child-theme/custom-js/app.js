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

//This is for the submit-link page

if (document.getElementsByTagName('body')[0].classList.contains("page-id-4621")) {
    const newTesting = document.querySelectorAll('.acf-checkbox-list li label input');

    newTesting[0].classList.add('removeCheck');
    newTesting[7].classList.add('removeCheck');
    newTesting[14].classList.add('removeCheck');
    newTesting[21].classList.add('removeCheck');
    newTesting[28].classList.add('removeCheck');

}



const mins = document.querySelectorAll('.minutes');

var totalMinutes = 0;

mins.forEach(min => {

    const convertMins = parseFloat(min.innerHTML);
    // console.log(`convertMins: ${convertMins}`);

    const calculate = min + convertMins;
    console.log(calculate);

    // const minutes = min.innerHTML;
    // console.log(`Minutes: ${minutes}`);


    //console.log(min.innerText);
});


// 140



// // Hours Minutes
// setTimeout(function () {

//     console.log('loaded time');



//     const hours = document.querySelectorAll('.hours');
//     console.log(hours);

// }, 3000);



