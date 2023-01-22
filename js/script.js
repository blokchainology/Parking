const $ = document ;
const form = $.querySelector(".form");
const inp2 = $.querySelector("#inp2");
const select = $.querySelector("select");
const inp3 = $.querySelector("#inp3");
const cityCode = $.querySelector("#cityCode");
const pass = $.querySelector("#pass");
const submit = $.querySelector("#submit");
const qr = $.querySelector(".qr");
const code = $.querySelector(".code");
const ok = $.querySelector("#ok");
const timeVOROD = $.querySelector(".timeVOROD");


const userPassInput = $.querySelector("#userPassInput");

let plack = "" ;
let time = "" ;
let i = 0;

function restValues(){
    inp2.value = "";
    select.value = "0";
    inp3.value = "";
    cityCode.value = "";
    pass.value = "";
    code.style.display = "none";
    qr.style.display = "none";
    ok.style.display = "none";
    timeVOROD.value = "";
    timeKHOROG.value = "";
    idForm.value = "";
    passForm.value = "";
}

function values(){

}

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
        minutes = "o" + minutes;
    }

    if (second < 10){
       second = "o" + second;
    }

    time = hours + " : " + minutes + " : " + second +  "  "  +  AMorPM;

}


submit.addEventListener("click" , ()=> {
    let random = Math.round(Math.random() * 2400)
    if (inp2.value &&  select.value && inp3.value && cityCode.value  && pass.value){
      i++;
      userPassInput.value = pass.value ;
      plack = (inp2.value +  select.value + inp3.value + cityCode.value  + pass.value);
      plack = Number(plack);
      plack = plack * random;
      plack = String(plack);
      code.style.display = "block";
      if(i === 1) {
        qrcode = new QRCode(qr, plack);
      }else if(i === 2) {
        alert("خر الاع عنتر مادر اسب پدر صلواتی یه بار میزنن مگه شهر هرته هاااا ازگل رو مخم راه نرو وگر نه دفعه بعدی بنی")
      }else{
        $.body.style.display = "none"
     }
     code.value = plack;
     times();
     timeVOROD.value = time ;
     ok.style.display = "block"
    }else {
        alert('با پر کردن فیلد ها خوشحالمون کن')
    }
});


