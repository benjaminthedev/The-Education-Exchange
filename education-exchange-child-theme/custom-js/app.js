if (!document.getElementsByTagName('body')[0].classList.contains("logged-in")) {
    console.log('Not Logged In AppJS');
}

const addingLO = document.querySelectorAll('body');
addingLO[0].classList.add('logged-out-user');

if (document.getElementsByTagName('body')[0].classList.contains("single-post")) {
    const bubbleTextChange = document.getElementById('wpd-bubble-add-message').innerText = "What do you think? Share your reflections.";
}