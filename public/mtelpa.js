//* NAVBAR caurspīdīgs uz banner attēla, pēc tam iegūst fonu:

var navcol = $(".navbar.navbar-dark");
var dark = "bg-dark";
var bannerimageheight = $('#home').height();

//* noņemt navbar fonu sākumā:
navcol.removeClass(dark);

//* pievienot navbar fonu, aizskrollējot pāri banner attēlam:
$(window).scroll(function(){
    if($(this).scrollTop() > (bannerimageheight-50)){
        navcol.addClass(dark);
    } else {
        navcol.removeClass(dark);
    }
})


//* PORTFOLIO sadaļas bilžu funkcionalitāte:

//* atvērt pilnekrāna img viewer:
function openModal(){
    //* parādīt img viewer, ar click uz bildes (nomainīt css display: none klasi):
    document.getElementById('my-modal').style.display = "inline-flex";
    //* noslēpt scrollbar, kad atvērta bilde:
    document.body.style.overflow = "hidden"; 
    //* noslēpt navbar, kad atvērta bilde:
    document.getElementById('my-navbar').style.display = "none";
}

//* aizvērt img viewer:
function closeModal(){
    document.getElementById('my-modal').style.display = "none";
    //* parādīt scrollbar, kad bildes aizvērtas:
    document.body.style.overflow = "auto";
    //* parādīt navbar, kad aizvērta bilde:
    document.getElementById('my-navbar').style.display = "flex";
}

//* slaida mainīgais:
var slideIndexJS = 1;

showSlides(slideIndexJS);

//* next un previous pogu funkc.:
function changeSlides(n){
    showSlides(slideIndexJS += n);
}

//* attēlot bildi, uz kuras uzklikšķināts:
function currentSlide(n){
    showSlides(slideIndexJS = n);
}

//* galvenā funkc., lai operētu ar slaidu img viewer:
function showSlides(n){
    var i;
    var slidesJS = document.getElementsByClassName("my-slides");
    //* funkc., lai no pēdējās bildes ar -> pārietu uz pirmo, un no pirmās uz pēdējo:
if (n > slidesJS.length){
    slideIndexJS = 1;
};
if (n < 1){
slideIndexJS = slidesJS.length;
};
//* noslēpt slaidus:
for (i = 0; i < slidesJS.length; i++){
    slidesJS[i].style.display = "none";
}
//* parādīt uzklikšķināto slaidu:
slidesJS[slideIndexJS-1].style.display = "block";
}



