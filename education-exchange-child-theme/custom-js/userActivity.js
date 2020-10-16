console.log('serActivity JS Loaded');

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



