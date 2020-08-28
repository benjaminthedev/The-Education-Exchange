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


