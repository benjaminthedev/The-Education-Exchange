console.log("serActivity JS Loaded"); const mins = document.querySelectorAll(".minutes"); var totalMinutes = 0; mins.forEach(o => { const t = parseFloat(o.innerHTML); totalMinutes += t }), console.log(totalMinutes); const hours = document.querySelectorAll(".hours"); var totalHours = 0; hours.forEach(o => { const t = parseFloat(o.innerHTML); console.log(`Hours: ${t}`); const e = 60 * t; console.log(`new mins: ${e}`), totalHours += e }), console.log(`Total Hours ${totalHours}`); const addTotal = totalMinutes + totalHours; function time_convert(o) { return `${Math.floor(o / 60)} hrs : ${o % 60} Minutes` } console.log(`This is the total time: ${addTotal}`); const headingTotal = document.querySelector(".totalTime"); console.log(headingTotal), headingTotal.innerText = time_convert(addTotal), addTotal > 1 && (document.querySelector(".totalHeading").style.display = "block", console.log("More than one so should be showing"));