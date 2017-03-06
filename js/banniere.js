var compteur = 0;
var pictureNameTab= ["img/a.jpg", "img/b.jpg", "img/c.jpg",
    "img/d.jpg", "img/e.jpg", "img/f.jpg" ,"img/g.jpg" ,"img/h.jpg"];
var debutCompteur = Math.round(new Date().getTime()/1000);

function nextPicture(interval) {



    if(Math.round(new Date().getTime()/1000) == debutCompteur + interval){
        compteur++;
        
        debutCompteur = Math.round(new Date().getTime()/1000);
    }




    document.getElementById("carousel").src = pictureNameTab[compteur];
}

