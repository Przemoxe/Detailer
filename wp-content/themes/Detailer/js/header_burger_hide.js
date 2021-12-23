const menu = document.querySelector(".naw_mobile");
const fa_bars = document.querySelector(".fa-bars");
const fa_angel = document.querySelector(".fa-angle-left");


fa_bars.addEventListener("click", function(){
    fa_angel.classList.toggle("off")
    fa_bars.classList.toggle("off");
    menu.classList.toggle("naw_mobile_unhide");

});
fa_angel.addEventListener("click", function(){
    fa_angel.classList.toggle("off")
    fa_bars.classList.toggle("off");
    menu.classList.toggle("naw_mobile_unhide");
});

