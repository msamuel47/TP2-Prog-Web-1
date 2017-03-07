var compteur = 0;
var pictureNameTab= ["img/image1.jpg", "img/image2.jpg"];
var debutCompteur = Math.round(new Date().getTime()/1000);

function pictureCarousel() {

    if (compteur == pictureNameTab.length - 1){
        compteur = 0;
    }
    compteur++;
    document.getElementById("carousel").src = pictureNameTab[compteur];
}



