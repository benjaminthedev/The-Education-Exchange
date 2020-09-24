

window.addEventListener('load', (event) => {
    console.log('page is fully loaded');


    // var inputItem = document.querySelectorAll('iframe#acf-editor-35_ifr .mce-content-body');
    // console.log(inputItem)

    // inputItem.addEventListener('keydown', runEvent);

    // function runEvent(e) {
    //     console.log(e.type);
    //     console.log(console.e.value);
    // }






    const newFrame = document.getElementById('acf-editor-35_ifr');
    console.log(newFrame);

    //const textArea = document.querySelectorAll('iframe#acf-editor-35_ifr');
    //console.log(textArea);

    // function start() {
    //     let textLeng = newFrame.value.length;
    //     console.log(textLeng);
    // }

    // newFrame.addEventListener('keypress', start, false);


    const myVar = setInterval(everyTwoSeconds, 2000);

    function everyTwoSeconds() {

        console.log('2 seconds of loading');

        var isClicked = document.querySelectorAll('iframe#acf-editor-35_ifr .mce-content-body');
        isClicked.addEventListener('click', runEvent);

        function runEvent() {
            console.log('event type: ' + e.type);
        }

        var inputItem = document.querySelectorAll('iframe#acf-editor-35_ifr .mce-content-body p');
        console.log(inputItem);


        const log = document.querySelector('.mce-content-body');

        document.addEventListener('keypress', logKey);

        function logKey(e) {
            log.textContent += ` ${e.code}`;
            console.log(log.innerText);
        }


        // const texttext = document.querySelector('.mce-content-body');
        // console.log(texttext.innerText);


    }
});

// Get all inputs that have a word limit
document.querySelectorAll('input[data-max-words]').forEach(input => {
    // Remember the word limit for the current input
    // let maxWords = parseInt(input.getAttribute('data-max-words') || 0)
    let maxWords = 10;
    // Add an eventlistener to test for key inputs
    input.addEventListener('keydown', e => {
        let target = e.currentTarget
        // Split the text in the input and get the current number of words
        let words = target.value.split(/\s+/).length
        // If the word count is > than the max amount and a space is pressed
        // Don't allow for the space to be inserted

        if (!target.getAttribute('data-announce'))
            // Note: this is a shorthand if statement
            // If the first two tests fail allow the key to be inserted
            // Otherwise we prevent the default from happening
            words >= maxWords && e.keyCode == 32 && e.preventDefault()
        else
            words >= maxWords && e.keyCode == 32 && (e.preventDefault() || alert('Word Limit Reached'))
    })
});


//Getting the user name:
const userName = document.querySelectorAll('.avatar-24');
//Storing the user name in own const
const newUserName = userName[0].parentElement.innerText;
//Then set it to the form!
const blankNameField = document.querySelectorAll('.userNameField input[type="text"]');
//Ser the value!
blankNameField[0].value = newUserName;

// const myVar = setInterval(everyTwoSeconds, 2000);

//function everyTwoSeconds() {
    // console.log('Running every 2 seconds');

    // const nnewTest = document.querySelectorAll('.mce-content-body');
    // console.log(newTest[0].innerText)

//    console.log(nnewTest);


    //if (nnewTest[0].innerText > 10) { console.log('dede') };
    // if (nnewTest[0].values.length = 5) {
    //     console.log('dedededessssss')
    // } else {
    //     console.log('dedededessssss')
    // }

//}



// const nnewTest = document.querySelectorAll('.mce-content-body');
// console.log(newTest[0].innerText)
// if (nnewTest[0].innerText > 10) { console.log('dede') };


