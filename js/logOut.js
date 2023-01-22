const $ = document;
const timeKHOROG = $.querySelector(".timeKHOROG");
const idForm = $.querySelector("#idForm");
const passForm = $.querySelector("#passForm");
const lef = $.querySelector("#lef");
let time = "";
function times(){
    const date = new Date();
    let hours = date.getHours();
    let minutes = date.getMinutes();
    let second = date.getSeconds();
    let AMorPM = "AM"

    if(hours > 12){
        hours = hours - 12;
        AMorPM = "PM";
    }

    if (minutes < 10){
        minutes = "0" + minutes;
    }

    if (second < 10){
       second = "0" + second;
    }

    time = hours + " : " + minutes + " : " + second +  "  "  +  AMorPM;
}


lef.addEventListener('click' , ()=> {
    times();
    timeKHOROG.value = time;
})

